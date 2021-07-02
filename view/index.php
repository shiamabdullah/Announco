<?php 
$title = "X Titan E-COMM";

require_once('header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//print_r($_SESSION['current_user']);
$user=$_SESSION['current_user'];

?>

<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">X Titan E-COMMERCE</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">

            <?php 
            if(!isset($_SESSION['flag'])){
              
            echo '<ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span>';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</nav>';  
            
            }           
            else 
            {
                echo '<ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login">' ;
                echo $user['name'];
                echo' 🟢</a><a class="btn btn-light action-button" role="button" href="../controller/signout.php">Sign Out</a></span>';
                echo '</div>';
                echo '</div>';
                echo '</nav>';  

                $conn = getConnection();
                $sql = "select * from announcement";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result))
                {
        
                    // $output= 	"<tr>
                    //             <td>{$row['id']}</td>
                    //             <td>{$row['header']}</td>
                    //             <td>{$row['body']}</td>
                                
                    //         </tr>";
                    // echo $output;
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h4 class="card-title">';
                echo$row['header'];
                echo'</h4>';

                echo '<h6 class="text-muted card-subtitle mb-2">Posted on: ';
                $date=date('d/m/Y', strtotime($row['posttime']));

                echo $date;
                echo '</h6><p class="card-text">';
                echo$row['body'];
                echo'</p>';

                echo '<div class="btn-group" role="group"><button class="btn btn-primary" type="button">Update
                    </button><button class="btn btn-danger" type="button">Delete</button></div>';
                echo '</div>';
                echo '</div>';
        
                }
                
            }
            ?>
            
                
            </div>
        </div>
    </nav>


   
    

<?php 
include('footer.php');
 ?>