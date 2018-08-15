<?php

require_once('View.php');

class MainView extends View {

    /*Отображение контента главной страницы*/
    public function fetch() {
        if($this->page) {
            $this->design->assign('meta_title', $this->page->meta_title);
            $this->design->assign('meta_keywords', $this->page->meta_keywords);
            $this->design->assign('meta_description', $this->page->meta_description);
        }
        $this->design->assign('comments', ($this->comments->get_comments()));

        // Принимаем комментарий
        if ($this->request->method('post') && $this->request->post('comment')) {
            $comment = new stdClass;
            $comment->name = $this->request->post('name');
            $comment->city = $this->request->post('city');
            $comment->email = $this->request->post('email');
            $comment->text = $this->request->post('text');
            $captcha_code =  $this->request->post('captcha_code', 'string');

            // Передадим комментарий обратно в шаблон - при ошибке нужно будет заполнить форму
            $this->design->assign('comment_text', $comment->text);
            $this->design->assign('comment_name', $comment->name);
            $this->design->assign('comment_email', $comment->email);
            $this->design->assign('comment_city', $comment->city);
            // Проверяем капчу и заполнение формы
            if ($this->settings->captcha_product && !$this->validate->verify_captcha('captcha_product', $captcha_code)) {
                $this->design->assign('error', 'captcha');
            } elseif (!$this->validate->is_name($comment->name, true)) {
                $this->design->assign('error', 'empty_name');
            } elseif (!$this->validate->is_comment($comment->text, true)) {
                $this->design->assign('error', 'empty_comment');
            } elseif (!$this->validate->is_email($comment->email)) {
                $this->design->assign('error', 'empty_email');
            } else {
                // Создаем комментарий
                $comment->object_id = 1;
                $comment->type      = 'main';
                $comment->ip        = $_SERVER['REMOTE_ADDR'];
                $comment->lang_id   = $_SESSION['lang_id'];

                // Добавляем комментарий в базу
                $comment_id = $this->comments->add_comment($comment);

                // Отправляем email
                $this->notify->email_comment_admin($comment_id);

                header('location: '.$_SERVER['REQUEST_URI'].'#comment_'.$comment_id);
            }
        }

        return $this->design->fetch('main.tpl');
    }

}
