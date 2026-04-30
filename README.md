# 🔐 Login with Facebook using PHP SDK

This project demonstrates how to implement **Facebook Login** using **PHP SDK**. Users can log in using their Facebook account instead of filling long registration forms.

---

## 🚀 Features

- Login with Facebook account
- Fetch user profile data
- Session-based authentication
- Logout functionality

---

## 📁 Project Structure

```
index.php
welcome.php
fb-callback.php
fb-config.php
logout.php
```

---

## ⚙️ Facebook App Setup

1. Go to Facebook Developers
2. Create a new app
3. Add **Facebook Login** product
4. Go to **Settings → Basic**
   - Copy **App ID**
   - Copy **App Secret**
5. Go to **Facebook Login → Settings**
   - Add Callback URL  
     Example:
     ```
     http://localhost/fb-callback.php
     ```
6. Enable:
   - Client OAuth Login
   - Web OAuth Login
7. Set app status to **Live**

---

## ⚙️ fb-config.php

```php
<?php
session_start();

require_once 'php-graph-sdk-5.x/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => 'YOUR_APP_ID',
  'app_secret' => 'YOUR_APP_SECRET',
  'default_graph_version' => 'v3.2',
]);

$helper = $fb->getRedirectLoginHelper();
?>
```

---

## 🔑 index.php (Login Button)

```php
<?php
include_once('fb-config.php');

$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);
?>

<a href="<?php echo htmlspecialchars($loginUrl); ?>">
    Login with Facebook
</a>
```

---

## 🔄 fb-callback.php

```php
<?php
include_once('fb-config.php');

try {
  $accessToken = $helper->getAccessToken();
} catch(Exception $e) {
  echo 'Error: ' . $e->getMessage();
  exit;
}

if (!isset($accessToken)) {
  echo 'Access token not found!';
  exit;
}

$res = $fb->get('/me', $accessToken->getValue());
$user = $res->getDecodedBody();

$_SESSION['fbUserId'] = $user['id'];
$_SESSION['fbUserName'] = $user['name'];
$_SESSION['fbAccessToken'] = $accessToken->getValue();

header('Location: welcome.php');
exit;
?>
```

---

## 👋 welcome.php

```php
<?php
session_start();

if(!isset($_SESSION['fbUserId'])){
    header('Location: index.php');
    exit;
}
?>

<h2>Welcome <?php echo $_SESSION['fbUserName']; ?></h2>
<a href="logout.php">Logout</a>
```

---

## 🚪 logout.php

```php
<?php
session_start();

session_destroy();

header('Location: index.php');
exit;
?>
```

---

## 📦 Requirements

- PHP (7+ recommended)
- Facebook PHP SDK
- Web server (XAMPP / WAMP / LAMP)

---

## ⚠️ Important Notes

- Replace `YOUR_APP_ID` and `YOUR_APP_SECRET`
- Use HTTPS in production
- Keep App Secret secure
- Handle errors properly in production

---

## 📄 License

Free to use and modify.
