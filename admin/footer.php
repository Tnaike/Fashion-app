<?php
if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: ../404.php'));
        
    session_destroy();
}
?>
<footer class="footer__alt">
                <span>Copyright &copy; <?php echo date('Y') ?> clientbaze.ng</span>
                <ul class="footer-alt__nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="../contact-us.php">Contact</a></li>
                </ul>
            </footer>
        </div>
    </div>
</div>

<!-- Script -->
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/activepage.js"></script>

</body>
</html>