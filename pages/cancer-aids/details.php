<!DOCTYPE html>
<html lang="en">

<head>
    <title>SAI NGO | Cancer & AIDS Details</title>
    <?php include '../../shared/metaText.html'; ?>
    <link rel="stylesheet" href="./details.css">
</head>

<body>
    <?php include '../../shared/navbar/navbar.html'; ?>

    <div class="container">
        <div class="content-wrapper">
            <!-- Left Side: Profile and Report -->
            <div id="details-container" class="left-section"></div>

            <!-- Right Side: Comment Form -->
            <div class="right-section">
                <h3>Leave a Reply</h3>
                <form id="comment-form">
                    <label for="comment">Comment *</label>
                    <textarea id="comment" name="comment" required></textarea>

                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>

                    <label for="website">Website</label>
                    <input type="text" id="website" name="website">

                    <button type="submit">Post Comment</button>
                </form>
            </div>
        </div>
    </div>

    <?php include '../../shared/footer/footer.html'; ?>

    <script src="./details.js" type="module"></script>
</body>

</html>
