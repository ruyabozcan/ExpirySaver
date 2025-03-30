<?php include('header.php'); ?>

<!-- Cover Section -->
<div class="coverc d-flex justify-content-center align-items-center text-center" style="height: 400px; background: linear-gradient(135deg, rgba(0, 97, 95, 0.9), rgba(0, 97, 95, 0.5)), url('img/about3.jpg') no-repeat center center; background-size: cover;">
    <div class="text-white p-4 border border-5 rounded shadow-lg" style="max-width: 600px; border-color: #00615f;">
        <h1 class="display-4 font-weight-bold mb-3">Welcome to <span style="color: #00615f;">ExpirySaver</span></h1>
    </div>
</div>

<!-- About Us Section -->
<p class="heading" style="text-align: center; font-size: 32px; font-weight: bold; margin-top: 20px; color: #333;">About Us</p>

<!-- About Description -->
<div class="para" style="background-color: #f4f9f9; padding: 40px 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); max-width: 900px; margin: 30px auto;">
    <p style="font-size: 18px; color: #555; line-height: 1.8; text-align: center;">
        At <strong style="color: #00615f;">ExpirySaver</strong>, we are committed to reducing food waste and helping consumers save money. 
        Our platform connects customers with stores offering discounted products that are nearing their expiration dates. 
        By purchasing these products, users can enjoy high-quality items at a lower cost while contributing to a more sustainable future.
    </p>
</div>


<!-- Team Section -->
<p class="heading" style="text-align: center; font-size: 32px; font-weight: bold; margin-top: 40px; color: #333;">Meet Our Team</p>
<div class="team" style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
    <!-- Zeynep -->
    <div class="team-member" role="group" aria-labelledby="team-member-zeynep" style="text-align: center; width: 200px;">
        <h3 id="team-member-zeynep">Zeynep</h3>
        <p>Software Developer</p>
        <a href="mailto:zeynep@example.com" style="color: #00615f; text-decoration: none;" aria-label="Contact Zeynep">Contact</a>
    </div>

    <!-- Rüya -->
    <div class="team-member" role="group" aria-labelledby="team-member-ruya" style="text-align: center; width: 200px;">
        <h3 id="team-member-ruya">Rüya</h3>
        <p>Software Developer</p>
        <a href="mailto:ruya@example.com" style="color: #00615f; text-decoration: none;" aria-label="Contact Rüya">Contact</a>
    </div>

    <!-- Muhammad -->
    <div class="team-member" role="group" aria-labelledby="team-member-muhammad" style="text-align: center; width: 200px;">
        <h3 id="team-member-muhammad">Muhammad</h3>
        <p>Software Developer</p>
        <a href="mailto:muhammad@example.com" style="color: #00615f; text-decoration: none;" aria-label="Contact Muhammad">Contact</a>
    </div>

    <!-- Rustam -->
    <div class="team-member" role="group" aria-labelledby="team-member-rustam" style="text-align: center; width: 200px;">
        <h3 id="team-member-rustam">Rustam</h3>
        <p>Software Developer</p>
        <a href="mailto:rustam@example.com" style="color: #00615f; text-decoration: none;" aria-label="Contact Rustam">Contact</a>
    </div>
</div>

<!-- Survey Section -->
<p class="heading" style="text-align: center; font-size: 32px; font-weight: bold; margin-top: 40px; color: #333;">We Value Your Opinion</p>
<div class="survey" style="text-align: center; margin-top: 20px;">
    <form action="submit-survey.php" method="POST">
        <label for="feedback" style="font-size: 16px; color: #555;">How would you rate our service?</label>
        <select id="feedback" name="feedback" style="margin: 8px 0; padding: 8px; font-size: 14px; border-radius: 5px; border: 1px solid #ccc;">
            <option value="excellent">Excellent</option>
            <option value="good">Good</option>
            <option value="average">Average</option>
            <option value="poor">Poor</option>
        </select>
        <br>
        <button type="submit" style="background-color: #00615f; color: white; padding: 8px 16px; border: none; cursor: pointer; border-radius: 5px; font-size: 14px;">Submit</button>
    </form>
</div>

<!-- Location Map Section -->
<div class="map">
    <p style="font-size: 24px; margin-bottom: 10px;">Our Location</p>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.2849025700054!2d30.655501018804738!3d36.885835411080285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c0ac6078bc17ef%3A0x5fd67f917a225f07!2zQW50YWx5YSBCaWxpbSBVbml2ZXJzaXR5!5e0!3m2!1str!2str!4v1677682279871!5m2!1str!2str"
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>



<!-- Additional Styles for Responsive Design -->
<style>
    /* Cover Section */
    .coverc {
        width: 100%;
        height: 400px;
        background: url('img/about3.jpg') no-repeat;
        background-size: cover;
        display: grid;
        place-items: center;
        padding-top: 8rem;
    }

    /* Title Styling */
    .title {
        font-size: 38px;
        text-align: center;
        align-items: center;
    }

    /* Paragraph Styling */
    .para p {
        font-size: 23px;
        margin-left: 20px;
        margin-right: 20px;
    }

    /* Map Styling */
    .map {
        text-align: center;
        margin: 20px auto;
    }

    .map iframe {
        width: 80%;
        max-width: 800px;
        height: 400px;
        border: 0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Mobile Adjustments */
    @media (max-width: 767px) {
        .para p {
            font-size: 16px;
        }

        .map iframe {
            width: 90%;
            height: 250px;
        }

        .title {
            font-size: 28px;
            margin: 10px;
            text-align: center;
            align-items: center;
        }
    }
  /* Cover Section */
  .coverc {
        width: 100%;
        height: 400px;
        background: url('img/about3.jpg') no-repeat;
        background-size: cover;
        display: grid;
        place-items: center;
        padding-top: 8rem;
    }

    /* Title Styling */
    .title {
        font-size: 38px;
        text-align: center;
        align-items: center;
    }

    /* Paragraph Styling */
    .para p {
        font-size: 23px;
        margin-left: 20px;
        margin-right: 20px;
    }

    /* Team Styling */
    .team-member img {
        border-radius: 50%;
    }

    .team-member h3 {
        font-size: 20px;
        margin-top: 10px;
    }

    .timeline {
        border-left: 3px solid #00615f;
        padding-left: 20px;
    }

    /* Map Styling */
    .map {
        text-align: center;
        margin: 20px auto;
    }

    .map iframe {
        width: 80%;
        max-width: 800px;
        height: 400px;
        border: 0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Mobile Adjustments */
    @media (max-width: 767px) {
        .para p {
            font-size: 16px;
        }

        .map iframe {
            width: 90%;
            height: 250px;
        }

        .title {
            font-size: 28px;
            margin: 10px;
            text-align: center;
            align-items: center;
        }

        .team {
            flex-direction: column;
            align-items: center;
        }
    }
</style>