<?php
// facilitators.php
 
$facilitators = [
  [
    'name' => 'Rehmat Empowerment Wala',
    'role' => 'Empowerment Facilitator',
    'bio'  => 'Empowering students to reach their highest potential through digital mastery.',
    'image' => 'images/rehmat.jpeg',
    'facebook' => 'https://facebook.com/rehmat.empowerment',
    'instagram' => 'https://www.facebook.com/syedrehmat.a.shah',
    'twitter' => '#',
  ],
  [
    'name' => 'Momina Allahwala',
    'role' => 'Director',
    'bio'  => 'A Mind that is stretched by a new experience can never go back to its old dimension.',
    'image' => 'images/monina.jpeg',
    'facebook' => 'https://facebook.com/momina.allahwala',
    'instagram' => '#',
    'twitter' => '#',
  ],
  [
    'name' => 'Misbah Altaf Talentwali',
    'role' => 'Facilitator',
    'bio'  => 'Aspiring Graphic Designer, Freelancer in the making. Learning every day. Let’s connect & create.',
    'image' => 'images/misbah-altaf-talentwali.jpeg',
    'facebook' => 'https://facebook.com/misbah.altaf',
    'instagram' => '#',
    'twitter' => '#',
  ],
  [
    'name' => 'Rehan Allahwala',
    'role' => 'Founder',
    'bio'  => 'I run a High School designed for the Internet & AI Era – RehanSchool.net',
    'image' => 'images/rehan.jpeg',
    'facebook' => 'https://facebook.com/rehan.allahwala',
    'instagram' => '#',
    'twitter' => '#',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Facilitators - Rehan.Education</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    .facilitator-card {
      background: linear-gradient(145deg, #232129, #1a1723);
      border-radius: 15px;
      padding: 1.5rem;
      flex: 1 1 280px;
      box-shadow:
        10px 10px 30px #1a1723,
        -10px -10px 30px #2c2840;
      transform-style: preserve-3d;
      margin-bottom: 2rem;
      text-align: center;
      transition: transform 0.3s ease;
    }
    .facilitator-card:hover {
      transform: translateZ(20px);
      box-shadow:
        0 0 20px #40e0d0,
        inset 0 0 10px #7fffd4;
    }
    .facilitator-img {
      width: 140px;
      height: 140px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #40e0d0;
      box-shadow: 0 0 15px #40e0d0;
      margin-bottom: 1rem;
    }
    .social-icons a {
      margin: 0 0.5rem;
      font-size: 1.5rem;
      color: #7fffd4;
      transition: color 0.3s ease;
    }
    .social-icons a:hover {
      color: #40e0d0;
    }
  </style>
</head>
<body>
<?php include 'header.php'; ?>
 
<main>
  <h1>Meet Our Facilitators</h1>
  <div class="features" style="justify-content: center; flex-wrap: wrap;">
    <?php foreach($facilitators as $fac): ?>
      <div class="facilitator-card">
        <img src="<?php echo $fac['image']; ?>" alt="<?php echo htmlspecialchars($fac['name']); ?>" class="facilitator-img" />
        <h3><?php echo htmlspecialchars($fac['name']); ?></h3>
        <h4 style="color:#40e0d0; margin-bottom: 0.8rem;"><?php echo htmlspecialchars($fac['role']); ?></h4>
        <p style="font-size: 0.95rem; margin-bottom: 1rem;"><?php echo htmlspecialchars($fac['bio']); ?></p>
        <div class="social-icons">
          <?php if($fac['facebook'] !== '#'): ?>
            <a href="<?php echo $fac['facebook']; ?>" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          <?php endif; ?>
          <?php if($fac['instagram'] !== '#'): ?>
            <a href="<?php echo $fac['instagram']; ?>" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <?php endif; ?>
          <?php if($fac['twitter'] !== '#'): ?>
            <a href="<?php echo $fac['twitter']; ?>" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
 
<?php include 'footer.php'; ?>
</body>
</html>
