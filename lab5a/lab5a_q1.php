<!DOCTYPE html>
    <html lang="en">
        <head>
        <title>Lab 5a Q1</title>
        </head>
        <body>
        <?php
        $name = "Muhammad Syarafi Bin Shaharin";
        $matricnumber = "AI240047";
        $course = "Computer Science (Information Security";
        $yearofstudy = "2026"  ;
        $Address = "Km263 ,Jalan Kasa Height ,Taman Kasa Height" ;    
         ?>
            <table>
                <tr>
                <td>Name : </td>
                <td><?php echo "$name"; ?></td>
                </tr>
                <tr>
                <td>Matric Number : </td>
                <td><?php echo "$matricnumber"; ?></td>
                </tr> 
                <tr>
                <td>Course : </td>
                <td><?php echo "$course"; ?></td>
                </tr> 
                <tr>
                <td>Year of Study : </td>
                <td><?php echo "$yearofstudy"; ?></td>
                </tr> <tr>
                <td>Address : </td>
                <td><?php echo "$Address"; ?></td>
                </tr> 
            </table>

        </body>
    </html>