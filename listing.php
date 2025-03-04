<?php include 'include/head.php';?>
<div class="container">
    <div class="list-container">
        <div class="left-col">
            <p>2 Options</p>
            <h1>Houses Available</h1>
            <div id="houses-container"></div>
            <script src="js/listing.js"></script>
        </div>
        <div class="right-col">
            <div class="sidebar">
                <h2>Select Filters</h2>
                <h3>Property Type</h3>
                <div class="filter">
                    <input type="checkbox"><p>House</p> <span>(0)</span>
                </div>
                <div class="filter">
                    <input type="checkbox"><p>Hostel</p> <span>(0)</span>
                </div>
                <div class="filter">
                    <input type="checkbox"><p>Flat</p> <span>(0)</span>
                </div>
                <div class="filter">
                    <input type="checkbox"><p>Villa</p> <span>(0)</span>
                </div>
                <div class="filter">
                    <input type="checkbox"><p>Guest Suite</p> <span>(0)</span>
                </div>
                
            </div>
        </div>
    </div>
    <?php include 'include/footer.php';?>
</body>
</html>