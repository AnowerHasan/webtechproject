<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table width="100%" frame="box">
    <tr>
        <?php
        include "template/top-bar.php";
        ?>
    </tr>
    <tr>
        <?php
        include "template/left-sidebar.php";
        ?>
        <td>
            <fieldset>
                <legend><b>CHANGE PASSWORD</b></legend>
                <br/>
                <form>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="150"></td>
                            <td width="10"></td>
                            <td width="150"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><font size="3">Current Password</font></td>
                            <td>:</td>
                            <td><input type="password" /></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td><font size="3" color="green">New Password</font></td>
                            <td>:</td>
                            <td><input type="password" /></td>
                            <td></td>
                        </tr>
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td><font size="3" color="red">Retype New Password</font></td>
                            <td>:</td>
                            <td><input type="password" /></td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" value="Update" />
                    <a href="dashboard.php">Dashboard</a>
                </form>
            </fieldset>
        </td>

    </tr>
    <?php
    include "template/footer.php";
    ?>
</table>
</body>
</html>