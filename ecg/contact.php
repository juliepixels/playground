<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The East Cobb Group - Business IT Consulting Services - Atlanta, Georgia and the U.S. Southeast</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/styles.css">
  <?php $pageName = "contact"; ?>
</head>
<body>
  <?php include_once("templates/header.php"); ?>
  <main role="main" aria-labelledby="contact-ecg">
    <div class="hero hero-small">
      <div class="site-width">
      </div>
    </div>
    <div class="content-block site-width">
      <h1 id="contact-ecg" class="page-title">Contact Us</h1>
      <p>The East Cobb Group, Inc. can help improve your business. Let us know which services you are interested in discussing. You will be contacted personally within 24 to 48 hours.</p>
      <p></p>
      <form class="contact-form" action="action.php" method="post">
        <fieldset class="contact-form-checkboxes">
          <legend>Choose all the services that you're interested in:</legend>
          <label for="analysis">
            <input type="checkbox" id="analysis" name="analysis" value="analysis">
            Assessment and Requirements Analysis
          </label>
          <label for="identity">
            <input type="checkbox" id="identity" name="identity" value="identity">
            Identity Management
          </label>
          <label for="infrastructure">
            <input type="checkbox" id="infrastructure" name="infrastructure" value="infrastructure">
            Infrastructure
          </label>
          <label for="security">
            <input type="checkbox" id="security" name="security" value="security">
            Network Security
          </label>
          <label for="platform">
            <input type="checkbox" id="platform" name="platform" value="platform">
            Platform Management
          </label>
          <label for="projectManagement">
            <input type="checkbox" id="projectManagement" name="projectManagement" value="projectManagement">
            Project Management
          </label>
          <label for="storage">
            <input type="checkbox" id="storage" name="storage" value="storage">
            Storage Management
          </label>
          <label for="virtualization">
            <input type="checkbox" id="virtualization" name="virtualization" value="virtualization">
            Virtualization
          </label>
        </fieldset>
        <fieldset>
          <legend>Tell us about your business:</legend>
          <fieldset>
            <label for="company">Company Name <small>(required)</small></label>
            <input type="text" name="company" required />
          </fieldset>
          <fieldset>
            <label for="link">Website Link</label>
            <input type="url" name="link" />
          </fieldset>
          <fieldset>
            <label for="location">Address or Location <small>(required)</small></label>
            <textarea rows="3" maxlength="250" name="location" required></textarea>
          </fieldset>
          <fieldset>
            <label for="moreInfo">Any additional information that could be helpful, such as the industry type, your current technology stack, or a specific challenge the business is facing.</label>
            <textarea rows="10" maxlength="250" name="moreInfo"></textarea>
          </fieldset>
        </fieldset>
        <fieldset>
          <legend>How should we contact you?</legend>
          <fieldset>
            <label for="name">Full Name <small>(required)</small></label>
            <input type="text" name="name" required />
          </fieldset>
          <fieldset>
            <label for="email">Email <small>(required)</small></label>
            <input type="email" name="email" required />
          </fieldset>
          <fieldset>
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" />
          </fieldset>
        </fieldset>
        <fieldset>
          <input class="button" type="submit" value="Submit" />
        </fieldset>
      </form>
    </div>
  </main>
  <?php include_once("templates/footer.php"); ?>
</body>
</html>
