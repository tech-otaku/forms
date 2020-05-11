# Forms 

### Description

A collection of HTML forms that demonstrate different ways of submitting and processing form data. The forms are divided into two groups: those that use [hard-coded data](https://forms.tech-otaku.com/hardcoded.html) and those that are populated with [data from a MySQL database](https://forms.tech-otaku.com/mysql.php). 
<br />

### Setup

This is the [live demo](https://forms.tech-otaku.com/). To use on your own server:

- Download the [zip file](https://github.com/tech-otaku/forms/archive/master.zip). Within the `forms-master` directory is the following structure: 

    ```
    |-- public_html/            (Document Root)
        |-- a/
            |-- form-a-hardcoded.html
            |-- form-a-mysql.php
            |-- form-a-process.php 
        |-- b/
            |-- form-b-hardcoded.php
            |-- form-b-mysql.php
        |-- c/
            |-- form-c-hardcoded.html
            |-- form-c-mysql.php
        |-- d/
            |-- form-d-hardcoded.html
            |-- form-d-mysql.php
        |-- e/
            |-- form-e-hardcoded.html
            |-- form-e-mysql.php
        |-- f/
            |-- form-f-hardcoded.html
            |-- form-f-mysql.php
        |-- g/
            |-- form-g-hardcoded.html
            |-- form-g-mysql.php
        |-- scripts/
            |-- form-c-process.js
            |-- form-d-process.js
            |-- form-e-process.js
            |-- form-f-process.js
            |-- form-g-process.js
        |-- styles/
            |-- form.css    
        |-- form-request-json.php
        |-- form-request-text.php
        |-- hardcoded.html
        |-- index.html
        |-- mysql.php
    |-- forms.sql
    |-- mysql-credentials.ini.template
    ```
<br />

- Create the `forms` database:

    ```
    mysql -u root -p -e "CREATE DATABASE forms";
    ```
<br />

- Import data into the `menus` and `macos` tables:

    ```
    mysql -u root -p forms < /path/to/forms.sql
    ```
<br />
   
- Rename `mysql-credentials.ini.template`:

    ```
    mv /path/to/mysql-credentials.ini.template /path/to/mysql-credentials.ini 
    ```
    
    NOTE: Use `cp` instead of `mv` to keep the original file.
<br />

- Update `mysql-credentials.ini` with your own MySQL username and password:

    ```
    ; IMPORTANT! This is a template file. Rename it as 'mysql-credentials.ini' and provide the appropriate MySQL username and password. 

    ; This file is read using "$mysql_credentials = parse_ini_file('../../mysql-credentials.ini');"

    [mysql_credentials]
    host = 'localhost'
    username = '<USERNAME>'
    password = '<PASSWORD>'
    database = 'forms'
    charset = 'utf8'
    ```
<br />

### Form Submission Characteristics

#### Form Submission (A)

- No JavaScript or jQuery.

- Form data processed by a PHP script separate to the one that displays the form. Defined by the form's `action` attribute.
<br />

#### Form Submission (B)

- No JavaScript or jQuery.

- Form data processed by the same PHP script that displays the form. Defined by the form's `action` attribute.
<br />

#### Form Submission (C)

- Uses a JavaScript `XMLHttpRequest` object.

- Custom function to serialize (URL encode) form data.

- Uses the `XMLHttpRequest` object's `onload` and `onerror` event handlers.

- Server response is an HTML-formatted text string.
<br />

#### Form Submission (D)

- Uses a JavaScript `XMLHttpRequest` object.

- Uses a `FormData` object bound to the `form` element.

- Uses `addEventListeners` for `load` and `error` instead of an `XMLHttpRequest` object's `onload` and `onerror` event handlers.

- Server response is a JSON-encoded string (treated as text).
<br />

#### Form Submission (E)

- Uses jQuery's `ajax()` method

- Uses jQuery's `serialize()` method to URL encode form data

- Callbacks are defined using the `ajax()` method's `success` and `error` options

- Server response is an HTML-formatted text string.
<br />

#### Form Submission (F)

- Uses jQuery's `ajax()` method

- Uses a `FormData` object bound to the `form` element

- Callbacks are defined using the `ajax()` method's `success` and `error` options

- Server response is a JSON-encoded string (treated as a JSON object not text).
<br />

#### Form Submission (G)

- Uses jQuery's `ajax()` method

- Uses a `FormData` object bound to the `form` element

- Callbacks are defined using jQuery's `done()` and `fail()` methods

- Server response is an HTML-formatted text string.
<br />

#### Form Submission (H)

- Uses a JavaScript `fetch()` method

- Uses a `FormData` object bound to the `form` element

- Callbacks are defined using `then()` methods 

- Server response is a JSON-encoded string (treated as a JSON object).
<br />


