<!DOCTYPE html>
<html>
<head>
  <title>Your Personal Blog - Contact</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <!-- Header content here -->
  </header>

  <div class="container">
    <main>
      <section class="contact-form">
        <h2>Contact Us</h2>
        <form action="#" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit">Submit</button>
        </form>
      </section>
    </main>

    <aside class="sidebar">
      <!-- Sidebar content here -->
    </aside>
  </div>

  <footer>
    <!-- Footer content here -->
  </footer>
</body>
</html>
