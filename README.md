# wesecure FakeCMS

This honeypot made to attract Hackers to your admin or login page. Mostly, they usually check website under "login" "admin" or "wp-admin". By using this method you will be able to let them trap into your honeypot and get attackers IP, Location, Use-agent and more. Our honeypot are modified to deny sort methods of spamming.

  - Version: 1.0
  - Update: Working in create mechanism that generate and analyze automatically.
  - Demo: http://wesecure.ae/admin
  - Official Site: http://wesecure.ae/honeypot_fakecms

You will have:
  - information will be sent to your email.
  - IP of unauthorized attacker that visit the admin portal.
  - Anytime he attempt to sign in or try to bruteforce attack you will receive an email of his     ip saying that he is trying to brute force with his public ip
  - You will be able to know his location and country. Also, his user-agent information will be collected and sent to your email.

Markdown that these information is important and useful to know better about whom trying to attack your website.

### Upcoming Version

> - CMS to control the action of the attacker information
> - Dashboard showing result of the information given
> - Collect more information about the attacker
> - Smart Analytics that knows the attack type 



### Downloads
- Download using the website 
- Download using terminal
```sh
git clone https://github.com/zayedaljaberi/honeypot_fakecms
```

you will have to download two folders: "admin" and "Error"

Admin Folder will have:
- Index.php : This file is contain the interface and style of the fake admin portal login.
* portal.php - Here is where the action comes, when the user just visit the site it will automatically send you an email the ip of attacker. Then it will automatically redirect you to "Error" Folder.

> After the attacker try to use username and password to login, automatically it will get redirect to Error Folder.

Error Folder will have:
- Index.php : This file is contain the interface and style of the fake admin portal login. 
* portal.php - Here it will send you an email saying that the attacker try to attempt an bruteforce attack.



### Installation

Creating the fakecms requires [Github Files](https://github.com/zayedaljaberi/honeypot_fakecms)

You need to upload files into your hosting /www :

```sh
upload files using FTP or manually. 
```
Edit portal.php files (two files)
```sh
$ Change the email given to your email
```

### Security+
 - Always make sure to secure permission of the folders.
- Never put your admin page on links like /admin , /wp-admin, /login..etc
- Try to hide your admin portal page into several folders and different names
- Take advantages of the .htaccess file for security. [Download PDF](https://goo.gl/JqZywC)


### Analytics| in 5 days we had more than 450+ ip

More details on [wesecure](https://wesecure.ae/honeypot_fakecms).

License
----

WESECURE AE


**Enjoy and let them trap!**
