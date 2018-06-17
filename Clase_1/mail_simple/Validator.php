<?php

class Validator
{
    /**
     * @param $post
     * @return bool
     * @throws Exception
     */
    public static function check($post)
    {
        
        if (count($_POST) == 0) {
            throw new \Exception('Form is empty');
        }
        
        if (empty($post['name'])) {
            throw new Exception('El nombre is obligatorio');
        }
        
        if (empty($post['surname'])) {
            throw new Exception('El apellido is also obligated?');
        }
        
        if (filter_var($post['email'], FILTER_VALIDATE_EMAIL) === false) {
            throw new Exception('El mail che, o sea, c\'mon');
        }
        
        if (empty($post['message'])) {
            throw new Exception('Really? An email with nothing? Are you a hacker or something like that?');
        }
        
        return true;
    }
}