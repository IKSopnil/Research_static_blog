<footer class="bg-dark text-white py-3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h5>Thesis and Research</h5>
        <p>123 Main Street<br>Anytown, USA 12345</p>
        <p>(123) 456-7890</p>
        <p>info@thesisandresearch.com</p>
        <p id="fyi-link" style="cursor: pointer; color: blue">FYI</p>
    <p id="fyi-message" style="display: none;">These thesis and research topics in computer science were suggested by ChatGPT, a language model trained by OpenAI, based on the GPT-3.5 architecture. The topics are meant to provide inspiration and guidance to students and researchers interested in computer science. While we strive to provide accurate and useful information, it is important to conduct thorough research and consult with your academic advisors before finalizing a topic for your thesis or research. Additionally, please ensure that you follow proper citation and attribution guidelines when using external sources.</p>

      </div>
      <div class="col-12 col-md-6">
        <h5>Follow Us</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script>
    const fyiLink = document.getElementById("fyi-link");
    const fyiMessage = document.getElementById("fyi-message");

    fyiLink.addEventListener("click", () => {
        fyiMessage.style.display = fyiMessage.style.display === "none" ? "block" : "none";
    });
</script>
