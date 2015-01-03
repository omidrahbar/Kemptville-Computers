<body style="background-color: #151515; color: #fff; font-family: Arial, sans-serif; font-size: 10pt; padding:35px; width: 100%;">
    <div style="border: 2px solid #252525; -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px; padding:15px; width: 50%">
        <img src="http://kemptvillecomputers.com/assets/images/logo.png" alt="Kemptville Computers" style="padding-bottom:15px; padding-top: 15px;"/>
        <h4>Re: Thanks for booking your appointment!</h4>
        <hr style="border:3px solid #c52d2f;">

        <p class="lead">Hey {{ $name }}!</p>
        <p class="lead">Below is a copy of your support ticket and reference ID. We'll be in touch soon!</p>

            <h4>Your Awesome Unique ID: {{ $supportId }}</h4>
            <h4>Problem Area: {{ $problemArea }}</h4>
            <h4>Phone: {{ $phone }}</h4>
            <h4>Problem Description: {{ $problemDescription }}</h4>
            <h4>Ideal Service Date: {{ $serviceDate }}</h4>
            <h4>Physical Address: {{ $physicalAddress }}</h4>

        <hr style="border:3px solid #c52d2f;">
            <section style="text-align:center; width:100%;">
                <small>Please don't respond directly to this message. This is an automated system and no replies will be 
                acknowledged. Please send enquiries through sales@kemptvillecomputers.com or by visiting our web site.</small>
                <p>&copy; <?=date('Y');?> Kemptville Computers &middot; <a href="http://www.kemptvillecomputers.com">Visit Web Site</a></p>
            </section>
    </div>
</body>    