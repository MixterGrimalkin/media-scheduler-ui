<!DOCTYPE html>
<html>
    <?php
    include("includes/header.html");
    include("includes/common.php");
    include("includes/wrapper.php");
    echo wrap("script", [], "url = '" . URL . "';");
    
    $femaleTicket = get("/showers/female");
    $maleTicket = get("/showers/male");
    ?>
    <body onload="selectTab('tabTickets');">
        <div class="ticketContent">
            <h1>Shower Tickets</h1>
            <div class="showerButton" onclick="setTicketNumber('female', <?php echo $femaleTicket ?>);">
                FEMALE
                <p class="ticketNumber">
                    <?php echo $femaleTicket ?>
                </p>
            </div>
            <div class="showerButton" onclick="setTicketNumber('male', <?php echo $maleTicket ?>);">
                MALE
                <p class="ticketNumber">
                    <?php echo $maleTicket ?>
                </p>
            </div>
            <br>
            <div class="showerControl" onclick="nextTicketNumber('female');">
                Next
            </div>
            <div class="showerControl" onclick="nextTicketNumber('male');">
                Next
            </div>
        </div>

    </body>
</html>