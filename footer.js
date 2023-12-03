const createFooter = () => {
    let footer = document.querySelector('footer')
    footer.innerHTML =
     `
    <div class="footer-content">
    <img src="logo.png" class="logo" >
    <div class="category">
        <ul class="category">
            <li class="category-title">Art Works</li>
            <li><a href="#" class="footer-link">Sketches</a></li>
            <li><a href="#" class="footer-link">Paintings</a></li>
            <li><a href="#" class="footer-link">Creative Art</a></li>
            <li><a href="#" class="footer-link">Pen Art</a></li>
    
        </ul>
    </div>   
</div>
<p class="footer-title">About This page</p>
<p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
     Neque repellat nesciunt nisi ea rem quibusdam quam veniam distinctio 
     itaque officiis officia, exercitationem blanditiis quis libero aliquid,
     minima omnis nam possimus.</p>
     <p class="info">Support emails - lakshayjatawat2506@gmail.com</p>
     <p class="info">phone - 7385375376, 9967913690</p>
     <div class="footer-social-container">
         <div>
             <a herf="#" class="social-link">terms & services</a>
             <a herf="#" class="social-link">privacy page</a>
         </div>
         <div>
            <a herf="https://www.instagram.com/laksh_2506/?hl=en" class="social-link">Instagram</a>
            <a herf="#" class="social-link">facebook</a>
            <a herf="#" class="social-link">twitter</a>
         </div>
     </div>
     <p class="footer-credit">Artworks Best online store</p>

    `
    ;

}
createFooter();
