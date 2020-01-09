<script>
let id = <?php echo $_SESSION['id']; ?>;
let first_name = <?php echo json_encode($_SESSION['first_name']); ?>;
let last_name = <?php echo json_encode($_SESSION['last_name']); ?>;
let email = <?php echo json_encode($_SESSION['email']); ?>;
let password = <?php echo json_encode($_SESSION['password']); ?>;
let institution  = <?php echo json_encode($_SESSION['institution']); ?>;
let department = <?php echo json_encode($_SESSION['department']); ?>;
let division = <?php echo json_encode($_SESSION['division']); ?>;
let building = <?php echo json_encode($_SESSION['building']); ?>;
let limit = <?php echo $_SESSION['notification_limit']; ?>;
</script>
