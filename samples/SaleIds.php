<?php
include_once './vendor/autoload.php';
use Morton\Youshu\Goods\SaleIds;
$data = [
    'merchId'=>'229832127808536577',
    'timestamp'=>date('Y-m-d H:i:s'),
    'nonceStr'=>uniqid(),
    'signId'=>'1449693080587509761',
    'pageCurrent'=>1,
    'pageSize'=>10
];
$privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEpQIBAAKCAQEAxWWYXctRJYBnPjr2jo0xMLUFjBTyXFXWhuzbqgAwuR4AXoPJ5tTearzAiq89COhLeykjsjhh502CaRQ0QJBDzClmey0DzWozkge3eOF5BWNZCpfR9FbHWE/j0ub6BdCrbMrV0fM7zm8/3QbKWGhEyqy0YberXiXUR3tysSg2a85GfD7AMSzVFJbNai3efoMt0K3uQhjTp3iY0VPGpkW/BuzghcS7j0KX0meXTq6ShgxyN5KbX5aoNlOEgQFHy7om/junY1WZXrCFW3B8zvpFq2CRNaCJZQe2pMMdJk0xiv7UlSHbU/36O7gJ2oBcngTKNkjZ95uY5uKN/6vPiLoOUwIDAQABAoIBAQCGWxs1JBEMZHRhQALXjjSgAWZQLWW1AVvuJENzV4PSTCBWNH91FQh6QBURkCsL6AiQQLUiNgw1QmV0HiNempL64Gb3ifEfnJyTVZtEtLsJttBBTIrEM1ilvGLGBx7AXIKBnyGgMF1Rqhke2ONa/0Vradew9zG1+Cufp9+tw0AfaWnBNjX+FEVj2LjgQrd6giuSiPfmDMuGNI50altOzNs2snXWdqJalooa5byw4hihnwHJ7HNHUG31ZzcT/X+7PAM9GUjTsOLbiv0l6H6YPGUC9NfUq87Fhj3cmBeaXeb4oWQc+fOqA73toH1Q6Ke2xpCCuxUN6lkcXbsVvDQMbxdJAoGBAO3fZ6BXgcxAgkgZXtMNADLN1Om2zNbxnz+4nxYYuCRWWr/rrDd/ifN0mcKaOz8PiT2ndfLMcF3Gjj044ZABS8sraohRdP+pooywp5AyaTeDy720y1NmbsqWtGKf/+kBp8+N0AbKSuUGSWnFnJl51p7zfvxYHoWpMNTbQDPC65xnAoGBANRwju6nYCqaEdG8hVWYifbkZ6iJRdB9xFbnhJHUxH9wD3tBeh1QjLqaQnkOGczeGRU77M+rl/wWrteGWrpf9OskpXt8OQwAvdPurHS1QArBTqsC94t8lHvOeyYa/yl5UfztwfpwQZUxN6Dznu5F8+wRJIglbdOS9ai1dHcLi8s1AoGATrjluZncOfWLaEMFL8GYtDeMZAB8UBJMyrDV7WEm59ewVt2u8/sAc5K+JDoYq2j/2WinT0A7W72Pa1F8zMSxCb8Hla+nkcjZI8h+2+jjC11RuymvNJ2swt0XO6CJ99n1aGodU3H1UVBAUYH1rpE05wvclbSv/ToeEAOzfq3efbcCgYEAz3yUDYHKSjGqn8faDmzqqwoQOCrC1kxP3HVJJMnDlZhUdpTP+Ru4J3UM4YElL9PoebXKqFY3Hk7lO7mMmaWo55UmT0JX0WJUBU+CfoacYyTEegBu2Hy35WgZHXGWr+I/cqKhJ8JGO7oTVA89tgj6oSFpJdQwvUk2yC1Z7/+F7NUCgYEAwnF7z8IaKLOtBOe0w6nAOdc46jg3R4vwX904z+Axx3HUpECYgAeafHRoQ/uzXTzEtrJplt+g0Uq1+XhSo8oYBztYFKbd/lT7K9aqnU1JA45BZxpk8w43Erlwvv0f+vaYs5gGwFkPYdsXL7S08w2v9TAp/s4Ldg9wmz8iGMk7vH0=
-----END RSA PRIVATE KEY-----
EOD;
$publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxWWYXctRJYBnPjr2jo0xMLUFjBTyXFXWhuzbqgAwuR4AXoPJ5tTearzAiq89COhLeykjsjhh502CaRQ0QJBDzClmey0DzWozkge3eOF5BWNZCpfR9FbHWE/j0ub6BdCrbMrV0fM7zm8/3QbKWGhEyqy0YberXiXUR3tysSg2a85GfD7AMSzVFJbNai3efoMt0K3uQhjTp3iY0VPGpkW/BuzghcS7j0KX0meXTq6ShgxyN5KbX5aoNlOEgQFHy7om/junY1WZXrCFW3B8zvpFq2CRNaCJZQe2pMMdJk0xiv7UlSHbU/36O7gJ2oBcngTKNkjZ95uY5uKN/6vPiLoOUwIDAQAB
-----END PUBLIC KEY-----
EOD;
$objcet = new SaleIds($privateKey,$publicKey);
$reslut = $objcet->request($data);
