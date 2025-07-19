<?php include("header.html")?>
<head>
     <link rel="stylesheet" href="About.css">
</head>
<body>
<body>
  <div class="about-section">
    <div class="about-container">
      <h1>About Tomato 🍅</h1>
      <p>Tomato is your trusted partner in hunger. With quick delivery, quality restaurants, and delicious food, we aim to make your food journey simple and satisfying.</p>
    </div>
  </div>

  <div class="review-form-section">
    <h2>Leave a Review</h2>
    <form class="review-form">
      <input type="text" id="name" placeholder="Your Name" required>
      <select id="rating" required>
        <option value="">Rating</option>
        <option value="5">★★★★★ - Excellent</option>
        <option value="4">★★★★☆ - Good</option>
        <option value="3">★★★☆☆ - Average</option>
        <option value="2">★★☆☆☆ - Poor</option>
        <option value="1">★☆☆☆☆ - Bad</option>
      </select>
      <textarea id="comment" placeholder="Write your review here..." required></textarea>
      <button type="button" onclick="submitReview()">Submit</button>
    </form>
  </div>

  <div class="customer-reviews">
    <h2>Customer Reviews</h2>
    <div id="reviews-list">
      <!-- Reviews will be displayed here -->
    </div>
  </div>
</body>
<?php include("footer.html")
?>
