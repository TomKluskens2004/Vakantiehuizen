<?php include 'include/head.php';?>
<div class="containercontact">
    <form onsubmit="sendEmail(); reset(); return false;">
        <h3>Get In Touch!</h3>
        <input type="text" id="name" placeholder="Enter full name" required>
        <input type="email" id="email" placeholder="Enter your email" required>
        <input type="text" id="phone" placeholder="Enter phone number" required>
        <textarea name="message" id="message"rows="4" placeholder="How can we help you?"></textarea>
        <button class="submit">Send</button>
        
    </form>
</div>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="js/contact.js"></script>
<?php include 'include/footer.php';?>