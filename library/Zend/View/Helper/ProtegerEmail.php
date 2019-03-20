<?php

class Zend_View_Helper_ProtegerEmail extends Zend_View_Helper_Abstract {

    public function ProtegerEmail($email) {
        $email=explode('@', $email);
        $emailProtegido = '<script language="JavaScript" type="text/javascript"> var e = "'.$email[0].'";    var d = "'.$email[1].'";     document.write(e + "@" + d); </script>';
        return $emailProtegido;
    }

}
