<?php include '../classes/States.php'; ?>
<?php 
    $state = new States();
    if(!empty($_POST["state_id"])) {
        $id = intval($_POST['state_id']);
        $getLga = $state->getLgaByStateId($id);
?>
    <option value="">Select lag from list</option>
    <?php
        if ($getLga) {
            while ($result = $getLga->fetch_assoc()) {
                ?>
            <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
        <?php
            }
        }
    }
    
    ?> 