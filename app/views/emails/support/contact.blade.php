<body style="background-color: #151515; color: #fff; font-family: Arial, sans-serif; font-size: 10pt; padding:35px; width: 100%;">
    <div style="border: 2px solid #252525; -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px; padding:15px; width: 50%">
        <img src="http://kemptvillecomputers.com/assets/images/logo.png" alt="Kemptville Computers" style="padding-bottom:15px; padding-top: 15px;"/>
        <h4>New Client Message</h4>
        <small>NOTICE: This is a web site message.</small>
        <hr style="border:3px solid #c52d2f;">
        <h4>Name: {{ $name }}</h4>
        <h4>Phone: {{ $phone }}</h4>
        <h4>Email: {{ $email }}</h4>
        <h4>Message: {{ $msg }}</h4>

        <hr style="border:3px solid #c52d2f;">
            <section style="text-align:center; width:100%;">
                <p>&copy; <?=date('Y');?> Kemptville Computers &middot; <a href="http://www.kemptvillecomputers.com">Visit Web Site</a></p>
            </section>
    </div>
</body>    