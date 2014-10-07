<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => 'Basitliğe dönüş...',
    ],
    'locale' => [
        'en' => 'English',
        'nl' => 'Dutch',
        'ja' => 'Japanese',
        'se' => 'Swedish',
        'tr' => 'Turkish',
        'de' => 'German',
        'ru' => 'Russian',
        'fr' => 'French',
        'it' => 'Italian',
        'ro' => 'Romana',
        'pt-br' => 'Brazilian Portuguese',
        'fa' => 'Persian',
    ],
    'directory' => [
        'create_fail' => "Klasör oluşturulamıyor: :name",
    ],
    'file' => [
        'create_fail' => "Dosya oluşturulamıyor: :name",
    ],
    'system' => [
        'name' => 'Sistem',
        'menu_label' => 'Sistem',
    ],
    'plugin' => [
        'unnamed' => 'İsimsiz eklenti',
        'name' => [
            'label' => 'Eklenti Adı',
            'help' => 'Eklenti adı eşsiz olmalıdır. Örneğin, RainLab.Blog',
        ],
    ],
    'project' => [
        'name' => 'Proje',
        'owner_label' => 'Sahibi',
        'attach' => 'Projeyi Eşle',
        'detach' => 'Projeyi Ayır',
        'none' => 'Hiçbiri',
        'id' => [
            'label' => 'Proje ID',
            'help' => 'Proje ID\'sini nasıl bulurum?',
            'missing' => 'Lütfen kullanılacak Proje ID\'sini belirleyin.',
        ],
        'detach_confirm' => 'Bu projeyi ayırmak istediğinizden emin misiniz?',
        'unbind_success' => 'Proje ayırma işlemi tamamlandı.',
    ],
    'settings' => [
        'menu_label' => 'Ayarlar',
        'missing_model' => 'Ayarlar sayfasında Model tanımı eksik.',
        'update_success' => ':name için ayarlar güncellendi.',
        'return' => 'Sistem ayarları sayfasına dön',
    ],
    'email' => [
        'menu_label' => 'E-mail Ayarları',
        'menu_description' => 'E-mail ayarlarını düzenle.',
        'general' => 'Genel',
        'method' => 'E-mail Gönderme Yöntemi',
        'sender_name' => 'Gönderici Adı',
        'sender_email' => 'Gönderici E-mail Adresi',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP Adresi',
        'smtp_authorization' => 'SMTP giriş bilgisi gerekiyor',
        'smtp_authorization_comment' => 'Eğer kullandığınız SMTP sunucusu şifre ile işlem yapıyorsa burayı işaretleyiniz.',
        'smtp_username' => 'Kullanıcı Adı',
        'smtp_password' => 'Şifre',
        'smtp_port' => 'SMTP Portu',
        'smtp_ssl' => 'SSL bağlantısı gerekiyor',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail Dosya Yolu',
        'sendmail_path_comment' => 'Sendmail yazılımının sunucudaki yerini belirtiniz.',
    ],
    'install' => [
        'project_label' => 'Projeye bağla',
        'plugin_label' => 'Eklenti Yükle',
        'missing_plugin_name' => 'Yüklemek istediğiniz eklentinin adını giriniz.',
        'install_completing' => 'Kurulumu tamamla',
        'install_success' => 'Eklenti kurulumu tamamlandı.',
    ],
    'updates' => [
        'title' => 'Güncellemeleri Yönet',
        'name' => 'Yazılım Güncelleme',
        'menu_label' => 'Güncellemeler',
        'check_label' => 'Güncellemeleri kontrol et',
        'retry_label' => 'Tekrar dene',
        'plugin_name' => 'Adı',
        'plugin_description' => 'Açıklama',
        'plugin_version' => 'Versiyon',
        'plugin_author' => 'Yazar',
        'core_build' => 'Mevcut versiyon',
        'core_build_old' => 'Mevcut versiyon :build',
        'core_build_new' => 'Versiyon :build',
        'core_build_new_help' => 'Son versiyon kullanılabilir.',
        'core_downloading' => 'Uygulama dosyaları indiriliyor',
        'core_extracting' => 'Uygulama dosyaları çıkarılıyor',
        'plugin_downloading' => 'Eklenti indiriliyor: :name',
        'plugin_extracting' => 'Eklenti dosyaları çıkarılıyor: :name',
        'plugin_version_none' => 'Yeni eklenti',
        'plugin_version_old' => 'Mevcut v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'Yazılım güncelle',
        'update_completing' => 'Güncelleme işlemi tamamlanıyor',
        'update_loading' => 'Kullanılabilir güncellemeler yükleniyor...',
        'update_success' => 'Güncelleme işlemi başarıyla sonuçlandı.',
        'update_failed_label' => 'Güncelleme hatası',
        'force_label' => 'Güncellemeye zorla',
        'found' => [
            'label' => 'Güncellemeler bulundu!',
            'help' => 'Yazılım güncelleye tıklayarak güncelleme işlemini başlatabilirsiniz.',
        ],
        'none' => [
            'label' => 'Güncelleme yok',
            'help' => 'Yenü güncelleme bulunamadı.',
        ],
    ],
    'server' => [
        'connect_error' => 'Sunucuyla bağlantı kurulamadı.',
        'response_not_found' => 'Güncelleme sunucusu bulunamadı.',
        'response_invalid' => 'Sunucudan hatalı cevap geldi.',
        'response_empty' => 'Sunucudan boş cevap geldi.',
        'file_error' => 'Paket teslim edilirken sunucuda hata meydana geldi.',
        'file_corrupt' => 'Sunucudaki dosya bozulmuş.',
    ],
    'behavior' => [
        'missing_property' => ':class sınıfı :behavior davranışı tarafından kullanılan $:property özelliğini tanımlamalı.',
    ],
    'config' => [
        'not_found' => ':location için tanımlanan :file adlı ayar dosyası bulunamadı.',
        'required' => ':location konumunda kullanılan :property ayarı bir değer içermelidir.',
    ],
    'zip' => [
        'extract_failed' => "':file' adlı çekirdek dosyası dosya paketinden çıkarılamadı.",
    ],
];
