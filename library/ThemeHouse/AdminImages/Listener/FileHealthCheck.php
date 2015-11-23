<?php

class ThemeHouse_AdminImages_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/AdminImages/AdminImageHandler/Abstract.php' => '97e16b65e530804833158f1e09986716',
                'library/ThemeHouse/AdminImages/AdminImageHandler/Node.php' => '3a51541da69f59a3af2d35d75d428357',
                'library/ThemeHouse/AdminImages/AttachmentHandler/Node.php' => '2c5aa2cd62e86175b2230994a117dfaa',
                'library/ThemeHouse/AdminImages/ControllerAdmin/AdminImage.php' => '6ac8eb11de59a14d0354c5bc22e25e17',
                'library/ThemeHouse/AdminImages/Extend/XenForo/Model/Attachment.php' => 'c6445f577b13205a4f3eaa5eb15d1830',
                'library/ThemeHouse/AdminImages/Install/Controller.php' => '560dd64fba0fefc170c9c79b5aa3c4e7',
                'library/ThemeHouse/AdminImages/Listener/LoadClass.php' => 'aca737dd8c681dbabfcf53514359a7a9',
                'library/ThemeHouse/AdminImages/Model/AdminImage.php' => '03013d96aaf85e06067b5961272865b8',
                'library/ThemeHouse/AdminImages/Route/PrefixAdmin/Images.php' => '3d94c3c050aabfcf6319b8040cb78f5d',
                'library/ThemeHouse/AdminImages/ViewAdmin/AdminImage/Upload.php' => 'aa7c04d1c848ed448a8f417bdee302a0',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}