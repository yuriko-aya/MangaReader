This is PHP 7 adapted version of [hernantas MangaReader](https://github.com/hernantas/MangaReader) using [OpenSSL Functions](https://php.net/manual/en/ref.openssl.php)


MangaReader
=========

Is web based application that can manage your manga collection and provide online reading experience (since it was web based) but offline or locally. The main use this application is for local/personal. It's possible for hosting/commercial use but I'm not focused on that in mind (at least not yet).

This web is for Manga that placed on folder that has structure like this:

![Manga Directory](http://i.imgur.com/Z9qxn5A.png)

Feature(s)
----------
1. Provide the same experience (might be better) when reading online but can be used for offline/local environment.
2. Easy to manage manga, chapter and your reading history. It will tell you if there's new chapter, new manga and it will keep track which chapter you have or haven't read yet.
3. Support multiple user account. You can create as many account as you want. Useful if you have many people in your house that want to have it own reading history.
4. Since this was web application, that mean you can access it with multiple device such as mobile phone, tablets, etc. As long as it has supported web browser.

Screenshots
-----------

![Manga Newsfeed](http://i.imgur.com/DdQ7iU1.png)
![Manga Directory](http://i.imgur.com/2CCKHwG.png)

Requirements
------------
1. Web server that support PHP 5.5.0 or greater.
2. Web server that allow .htaccess to override
3. PHP Extension enabled such as:
    - mcrypt
    - PDO & PDO Mysql
4. Mysql Server

Installation
------------
1. Make sure you have web server that support PHP 5.5.0 or greater & mysql server installed and running on your computer (or maybe your local server). If you are using windows, you can install XAMPP or WAMPP.
2. Extract zip file and place it at your web server. (ex: "xampp/htdocs/" if using XAMPP, or "wampp/www/" if using WAMPP) or "/var/www" on linux based OS
3. Access it via your web broser. For example if you name your folder mangareader and place it htdocs, you can access it via localhost/mangareader
4. Follow the installation guide when you open the web for the first time.
5. Have fun.

**Note:** Make sure you allow htaccess on your web server. XAMPP enable by default, but if you must enable it manually [See this article.](http://stackoverflow.com/questions/4321990/htaccess-not-working-on-wamp)

Feature Request, Bug/Issue report
----------------
If you encounter any bug or error, please use issues page to report any bug you found.

If you have some idea for new feature to be added, please use issues page to report. But keep in mind that not all feature can/will be implemented and more feature=this web app will become more heavy, which is you probably don't want to.

To make my job easier, please don't make new one if same or similar issues already created.

**Note:** Again, since this is free time project (for now) I can't really guarantee how much I can work on this project. So there might be slow update.

FAQ
-----
##### Q: When accessing link, it said object not found.
A:  Make sure you allow htaccess on your web server. XAMPP enable by default, but if you must enable it manually if using WAMPP. [See this article.](http://stackoverflow.com/questions/4321990/htaccess-not-working-on-wamp)

Commercial/Online Use
--------------
You can use this for local or via hosting, but there is a problem that may occur that can cause quite problem such as:

1. This website app is still not professionally tested for security.
2. Lack feature for online purpose. (Like upload for example)

I try my best to make this website have as much as feature as possible and as secure as possible so it can be used for online website (like cms). But I can't guarantee anything about this since for now this is free time project. There might be security issues but if you found one you can report it in the issues page.

But seriously, use at your own risk.
