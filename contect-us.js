document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const degree = document.getElementById('degree').value;
    const major = document.getElementById('major').value;

    // EmailJS configuration to send email (you'll need an account)
    emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", {
        to_name: name,
        from_email: email,
        phone_number: phone,
        address: address,
        degree: degree,
        major: major
    }).then(function (response) {
        document.getElementById('notification').innerText = "Message Sent Successfully!";
    }, function (error) {
        document.getElementById('notification').innerText = "Failed to Send Message!";
    });

    // Clear form after submission
    document.getElementById('contactForm').reset();
});
document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const degree = document.getElementById('degree').value;
    const major = document.getElementById('major').value;

    // EmailJS configuration to send email (you'll need an account)
    emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", {
        to_name: name,
        from_email: email,
        phone_number: phone,
        address: address,
        degree: degree,
        major: major
    }).then(function (response) {
        document.getElementById('notification').innerText = "Message Sent Successfully!";
    }, function (error) {
        document.getElementById('notification').innerText = "Failed to Send Message!";
    });

    // Clear form after submission
    document.getElementById('contactForm').reset();
});
