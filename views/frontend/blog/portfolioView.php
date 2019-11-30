<?php $title = 'SUPER! Création de sites web et blog' ?>

<section class="title_container">
    <div class="title_portfolio">
        <h1>PORTFOLIO</h1>
    </div>
</section>

<section class="portfolio_projects_container">  
    <?php foreach ($projects as $project): ?>
        <div class="all_projects_published"> 
            <h3><?= $project->getTitle() ?></h3>
            <h4><?= $project->getImage() ?></h4>
            <a href="<?= $project->getLink() ?>">Visiter le site</a>
            <button id="myBtn" class="description_btn">Description</button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4>Description du projet</h4>
                    <h5><?= $project->getDescription() ?></h5>
                </div>
            </div>    
        </div>  
    <?php endforeach; ?>
    
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</section>


