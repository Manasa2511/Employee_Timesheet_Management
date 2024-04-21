<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <!-- sidebar profile name font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- sidebar profile name font -->
    <!-- font awesome 6.5.0 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome 6.5.0 cdn -->
    <link rel="stylesheet" href="../CSS/attendance.css">
    <title>Attendance</title>
</head>

<body>

    <div class="main">
        <div class="sidebar">
            <div class="sidebar-ofcname">
                <h3 class="sidebar-ofcname-head"> Techiebears</h3>

            </div>
            <hr>
            <div class="sidebar-profile">
                <div class="sidebar-profile-img ">
                    <img src="../img/profile.jpg" alt="">
                </div>
                <div class="sidebar-profile-name">
                    <h6>Alexdar noel</h6>
                    <p>Employee</p>
                    <hr>
                </div>
                <div class="sidebar-menus">
                    <div class="dashboard flex-center grey-bg-hover">
                        <i class="fa-sharp fa-solid fa-table-columns"></i>
                        <a href="../Html/dashboard.php">Dashboard</a>
                    </div>
                    <div class="attendance flex-center grey-bg-hover">
                        <i class="fa-regular fa-calendar active-desgin"></i>
                        <a class="active-desgin" href="../Html/attendance.php">Attendance</a>
                    </div>
                    <div class="leaves flex-center grey-bg-hover">
                        <i class="fa-solid fa-person-walking-luggage"></i>
                        <a href="../Html/leaves.php">Leaves</a>
                    </div>
                    <div class="basic-details flex-center grey-bg-hover">
                        <i class="fa-regular fa-address-card"></i>
                        <a href="/Html/Basic Details Html/basic-details.php">Basic Details</a>
                    </div>
                    <div class="holidays flex-center grey-bg-hover">
                        <i class="fa-regular fa-calendar-xmark"></i>
                        <a href="../Html/holidays.php">Holidays</a>
                    </div>
                    <div class="salary-slip flex-center grey-bg-hover">
                        <i class="fa-solid fa-toilet-paper"></i>
                        <a href="../Html/salary-slips.php">Salary Slips</a>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="attendance-list-main">
            <div class="attendance-list-head">
                <div class="head-part1">
                    <div class="attendance-icon">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div class="attendance-head">
                        <p>Attendance</p>
                    </div>
                </div>
                <div class="buttons-div">
                    <!-- warning popup button/icon -->
                    <div class="logout">
                        <button onclick="showPopup()"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                    </div>
                    <!-- warning popup button/icon -->
                    <!-- toggle button/icon -->
                    <div class="toggle-on">
                        <i class="fa-solid fa-toggle-on" onclick="showLogoutConfirmation()"></i>
                    </div>
                   <!-- toggle button/icon -->
                </div>
            </div>
            <!-- warning popup -->
            <div class="overlay" onclick="hidePopup()"></div>
            <div class="popup" id="warningPopup">
                <h2>Warning!</h2>
                <p>Would you like to log out</p>
                <button onclick="hidePopup()">No</button>
                <button onclick="redirectToLogin()">Yes</button>
            </div>
            <!-- warning popup -->
            <!-- logout popup -->
            <div class="logout-overlay" onclick="hideLogoutConfirmation()"></div>
            <div class="logout-popup" id="logoutConfirmation">
                <h6>LOGOUT</h6>
                <hr>
                <p>Type :</p>
                <div class="logout-options">
                    <select name="logout-type">
                        <option value="Options">Options...</option>
                        <option value="lunch-break">Lunch Break</option>
                        <option value="tea-break">Tea Break</option>
                        <option value="other">Other Break</option>
                        <option value="other">Session Logout</option>
                    </select>
                </div>
                <div class="logout-button">
                    <div class="logout-button-yes">
                        <button onclick="showPopup()">Yes</button>
                    </div>
                    <div class="logout-button-no">
                        <button onclick="hideLogoutConfirmation()">No</button>
                    </div>
                </div>
            </div>
            <!-- logout popup -->
            
           <div class="table-div">
            <table class="main-table">
                <tr class="table-head">
                    <th class="date">Date</th>
                    <th class="day">Day</th>
                    <th class="time-in">Time-in</th>
                    <th class="time-out">Time-out</th>
                    <th class="comments">Comments</th>
                    <th class="remarks">Remarks</th>
                </tr>
                <tr>
                    <td class="date1">1-02-2023</td>
                    <td class="day1">Monday</td>
                    <td class="time-in1">10:00am</td>
                    <td class="time-out1">08:00 pm</td>
                    <td class="comments1"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks1"><button>Working...</button></td>
                </tr>
                <tr>
                    <td class="date2">1-02-2023</td>
                    <td class="day2">Monday</td>
                    <td class="time-in2">10:00am</td>
                    <td class="time-out2">08:00 pm</td>
                    <td class="comments2"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks2"><button>Late Early Leave...</button></td>
                </tr>
                <tr>
                    <td class="date3">1-02-2023</td>
                    <td class="day3">Monday</td>
                    <td class="time-in3">10:00am</td>
                    <td class="time-out3">08:00 pm</td>
                    <td class="comments3"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks3"><button>Week Off...</button></td>
                </tr>
                <tr>
                    <td class="date4">1-02-2023</td>
                    <td class="day4">Monday</td>
                    <td class="time-in4">10:00am</td>
                    <td class="time-out4">08:00 pm</td>
                    <td class="comments4"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks4"><button>Early Leave...</button></td>
                </tr>
                <tr>
                    <td class="date5">1-02-2023</td>
                    <td class="day5">Monday</td>
                    <td class="time-in5">10:00am</td>
                    <td class="time-out5">08:00 pm</td>
                    <td class="comments5"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks5"><button>Early Leave...</button></td>
                </tr>
                <tr>
                    <td class="date6">1-02-2023</td>
                    <td class="day6">Monday</td>
                    <td class="time-in6">10:00am</td>
                    <td class="time-out6">08:00 pm</td>
                    <td class="comments6"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks6"><button>Late Early Leave...</button></td>
                </tr>
                <tr>
                    <td class="date7">1-02-2023</td>
                    <td class="day7">Monday</td>
                    <td class="time-in7">10:00am</td>
                    <td class="time-out7">08:00 pm</td>
                    <td class="comments7"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks7"><button>Late Early Leave...</button></td>
                </tr>
                <tr>
                    <td class="date8">1-02-2023</td>
                    <td class="day8">Monday</td>
                    <td class="time-in8">10:00am</td>
                    <td class="time-out8">08:00 pm</td>
                    <td class="comments8"><i class="fa-regular fa-message"></i></td>
                    <td class="remarks8"><button>Late Early Leave...</button></td>
                </tr>

            </table>
           </div>
        </div>
    </div>
    <script src="../JS/attendance.js"></script>
</body>

</html>