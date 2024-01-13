<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Health-Care Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="navbar">
    <a href="index.php">Home</a>

    <?php
    session_start();
        if (isset($_SESSION['user'])) {
            echo '<a href="profile.php">Profile</a>';
            echo '<a href="family.php">Family</a>';
            echo '<a href="appointment.php">Appointment</a>';
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
        }
    ?>
        <a href="#services">Services</a> 
        <a href="contact.php">Contact</a>

</div>
   

    <div class="banner">
    <img src="healthcare-medicine-background-medical-stethoscope-260nw-2220368695.jpg" alt="Banner Image">
    </div>

    <div class="landing">
        <form>
        <h1>Welcome to the Barangay Health-Care Management System</h1>
        <H2>Providing comprehensive healthcare services for the community.</H2>
        <h2>Regular health exams and tests can help find problems before they start. 
        <BR>They also can help find problems early, when your chances for treatment and cure are better. <BR>
        Which exams and screenings you need depends on your age, health and family history, and lifestyle choices such as what you eat, how active you are, and whether you smoke.
To make the most of your next check-up, here are some things to do before you go:
    <BR>  
Review your family medical history <BR>
Find out if you are due for any general screenings or vaccinations<BR>
Write down a list of issues and questions to take with you<BR>
Centers for Disease Control and Prevention</h2>

    
    </form>
    <div class="bottom-photos">
        <div class="photo">
            <img src="influenza-like-viruses.webp" alt="Photo 1">
            <p>Influenza (flu) is a highly contagious viral infection of the respiratory tract that affects people of all ages. It can cause severe illness and life-threatening complications, including pneumonia. The flu is spread by breathing in droplets from coughs and sneezes that contain the virus. It is a widespread illness that occurs every year</p>
        </div>
        <div class="photo">
            <img src="vaccination-of-senior-person-in-hospital.webp" alt="Photo 2">
            <p>Make an appointment to protect your health! My Turn makes it easier to stay safe and protect your health year-round. Learn about the vaccinations we support, make an appointment, find a walk-in clinic, access your digital vaccine record and more.</p>
        </div>
    </div>
    <div class="bottom-photos">
        <div class="photo">
            <img src="photo-1583324113626-70df0f4deaab.webp" alt="Photo 1">
            <p>Federal emergency funding for COVID-19 has ended, but don’t worry. Nearly all insurance plans cover the cost of COVID-19 vaccines. If you don’t have insurance or your plan doesn’t cover routine vaccinations, My Turn will provide a list of locations that offer vaccines at no cost for the uninsured</p>
        </div>
        <div class="photo">
        <img src="what-to-expect-dental-checkup.jpg" alt="Photo 1">

            <p>At each check-up, your dentist should: examine your teeth, gums and mouth. ask about your general health and any problems you've had with your teeth, mouth or gums since your last visit. ask about, and give you advice on, your diet, smoking and alcohol use, and teeth-cleaning habits</p>
        </div>
    </div>
    <h3>Register now to access personalized health information and services. <button><a href="register.php" style='color:aliceblue;'>Register</a></button></h3>
    
</div>

<style>.bottom-photos {
    display: flex;
    justify-content: space-between;
}

.photo {
    width: 48%; 
}

.photo img {
    width: 100%;
    height: auto;
}
.banner {
    display: flex;
    justify-content: center;
    width: 100%;

}
</style>
    <div class="footer"> <div class="services">
    <div id="services">This is the services element</div>  
        <h2>Healthcare Services</h2>
        <ul>
            <li>General Check-ups</li>
            <li>Vaccinations</li>
            <li>Emergency Care</li>
            <li>Chronic Disease Management</li>
        </ul>
        <p>Our healthcare services aim to provide comprehensive care to the community, focusing on both prevention and treatment. We strive to ensure the well-being of every individual.</p>
        <p>&copy; 2024 Barangay Health-Care Management System</p>
    </div>
<script>
    const link = document.querySelector('a[href="#services"]');
link.addEventListener('click', function (event) {
  event.preventDefault();
  scrollToTarget();
});
function scrollToTarget() {
  const targetElement = document.querySelector('#services');
  const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

  window.scrollTo({
    top: targetPosition,
    behavior: 'smooth'
  });
}
</script>
    
</body>
</html>