<?php

class File
{
    public function upload_img($res, $filename)
    {
        $up_dir = './upload/';
        if (!file_exists($up_dir)) {
            mkdir($up_dir, 0777);
        }
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $res, $result)) {
            $type = $result[2];
            $new_file = $up_dir.$filename.'.png';
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $res)))) {
                return $new_file;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function base64_2_file($data, $filename = '', $path = '')
    {
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $data, $result)) {
            $type = $result[2];

            if ($filename == '') {
                $filename = uniqid().'.'.$type;
            }
            if ($path == '') {
                $path = './upload/';
            }
            if (!file_exists($path)) {
                mkdir($path, 0777);
            }
            $new_file = $path.$filename;
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $data)))) {
                return $new_file;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function base64_to_file($data, $filename = '', $path = '')
    {
        $new_file = $path.$filename;
        if (file_put_contents($new_file, base64_decode(str_replace($data, '', $data)))) {
            return $new_file;
        } else {
            return false;
        }
    }
}
