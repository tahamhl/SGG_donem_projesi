# BLM-0481 Siber Güvenliğe Giriş Dönem Projesi

## Sosyal Mühendislik ve Kimlik Avı (Phishing) Simülasyonu

---

## 📚 Proje Hakkında

Bu proje, sosyal mühendislik ve kimlik avı (phishing) saldırılarının teknik ve sosyal boyutlarını uygulamalı olarak göstermek amacıyla hazırlanmıştır. Amaç, kullanıcıların bu tür saldırılara karşı farkındalığını artırmak ve alınabilecek güvenlik önlemlerini paylaşmaktır. Proje kapsamında, gerçek bir sistemin (BTÜ e-Kampüs) birebir benzeri bir sahte giriş sayfası ve phishing e-posta kampanyası geliştirilmiştir.

---

## 🚀 Özellikler

- Gerçekçi bir phishing (kimlik avı) web sitesi simülasyonu
- Gophish ile phishing e-posta kampanyası
- Kullanıcı giriş bilgilerinin veritabanına kaydedilmesi
- Gerçek siteye otomatik yönlendirme
- Eğitim ve farkındalık materyalleri
- Tamamen etik ve eğitimsel amaçlı

---

## 🛠️ Kullanılan Teknolojiler ve Araçlar

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (MySQL ile PDO bağlantısı)
- **Veritabanı:** MySQL
- **Phishing Araçları:** Social-Engineer Toolkit (SET), Gophish
- **E-posta Kampanyası:** Gophish
- **Ekstra:** Bootstrap benzeri responsive tasarım

---

## 📂 Proje Dosya Yapısı
/proje
├── index.html # Ana sayfa (Türkçe)
├── index_en.html # Ana sayfa (İngilizce)
├── giris_tr.php # Giriş sayfası (Türkçe)
├── giris_en.php # Giriş sayfası (İngilizce)
├── login.php # Giriş işlemlerini yöneten PHP dosyası
├── create_table.sql # Veritabanı tablo oluşturma dosyası
├── javascript.js # JS kütüphanesi (RequireJS)
├── cookies.txt # Test amaçlı çerez dosyası
├── cookie.txt # Test amaçlı çerez dosyası



---

## ⚙️ Kurulum ve Çalıştırma

### 1. Gereksinimler

- PHP 7.x veya üzeri
- MySQL/MariaDB
- Bir web sunucusu (Apache, Nginx, XAMPP, vb.)

### 2. Veritabanı Kurulumu

```sql
-- create_table.sql dosyasını çalıştırın:
CREATE TABLE IF NOT EXISTS login_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    login_date DATETIME NOT NULL
);
```

### 3. Projeyi Çalıştırma

1. Tüm dosyaları web sunucunuzun kök dizinine kopyalayın.
2. `login.php` dosyasındaki veritabanı bağlantı bilgilerini kendi ortamınıza göre güncelleyin.
3. Sunucuyu başlatın ve `index.html` veya `index_en.html` üzerinden projeyi görüntüleyin.

---

## 🧑‍💻 Kullanım Senaryosu

1. Kullanıcıya, Gophish ile hazırlanmış bir phishing e-postası gönderilir.
2. Kullanıcı, e-postadaki linke tıklayarak sahte giriş sayfasına yönlendirilir.
3. Kullanıcı adı ve şifre girildiğinde, bilgiler veritabanına kaydedilir.
4. Kullanıcı, gerçek BTÜ e-Kampüs sitesine yönlendirilir.
5. Simülasyon sonrası, kullanıcıya ve hedef kitleye yönelik eğitim ve bilgilendirme yapılır.

---

## ⚠️ Etik ve Yasal Uyarı

> **UYARI:**  
> Bu proje yalnızca eğitim ve farkındalık oluşturmak amacıyla geliştirilmiştir. Gerçek kullanıcılar üzerinde, izinsiz ve etik dışı şekilde kullanılması kesinlikle yasaktır. Tüm testler, senaryo ve test kullanıcıları ile yapılmıştır. Toplanan tüm veriler proje sonunda imha edilmiştir.

---

## 👨‍👩‍👧‍👦 Katkıda Bulunanlar

- **Semih Karamustafa:** Araç seçimi, senaryo ve teknik altyapı
- **Mehmet Taha Mehel:** Sahte web sitesi ve phishing e-posta kampanyası
- **Mustafa Semih Bulut:** Eğitim materyalleri ve güvenlik önlemleri
- **Ahmet Can Bul:** Test sonuçları, sunum ve rapor

---

## 📢 Lisans

Bu proje MIT lisansı ile lisanslanmıştır. (Eğitim ve etik kullanım için uygundur.)

---

## 📬 İletişim

Her türlü soru, öneri veya katkı için lütfen proje ekibiyle iletişime geçin.

---

**Siber güvenlikte en zayıf halka insan, en güçlü savunma ise farkındalıktır!**
