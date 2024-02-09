 <footer class="footer mt-4 py-3 bg-light">
        <div class="container text-center">
            <?php
            $filename = basename($_SERVER['SCRIPT_FILENAME']);
            $modTime = filemtime($filename);
            echo "<p>Last modified: " . date("F d Y H:i:s.", $modTime) . "</p>";
            ?>
        </div>
    </footer></body>
</html>
