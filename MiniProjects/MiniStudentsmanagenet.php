<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mini - Modern Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fb;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            border-bottom: 1px solid var(--light-gray);
        }
        
        h1 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            color: var(--gray);
            font-size: 1.1rem;
        }
        
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .card-title {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
        }
        
        .stats-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .stat-card {
            background: var(--light);
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            flex: 1;
            min-width: 120px;
        }
        
        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .pass {
            color: var(--success);
        }
        
        .fail {
            color: var(--danger);
        }
        
        .section-a {
            color: #4361ee;
        }
        
        .section-b {
            color: #4cc9f0;
        }
        
        .section-c {
            color: #f8961e;
        }
        
        .section-d {
            color: #7209b7;
        }
        
        .student-list {
            margin-top: 10px;
            max-height: 300px;
            overflow-y: auto;
        }
        
        .student-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            border-bottom: 1px solid var(--light-gray);
            transition: background-color 0.2s;
        }
        
        .student-item:hover {
            background-color: var(--light);
        }
        
        .student-item:last-child {
            border-bottom: none;
        }
        
        .student-name {
            font-weight: 500;
        }
        
        .student-details {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        .grade {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            color: white;
        }
        
        .grade-a {
            background-color: #4cc9f0;
        }
        
        .grade-b {
            background-color: #4895ef;
        }
        
        .grade-c {
            background-color: #4361ee;
        }
        
        .grade-d {
            background-color: #3a0ca3;
        }
        
        .grade-e {
            background-color: #7209b7;
        }
        
        .grade-f {
            background-color: #f72585;
        }
        
        .highlight-card {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }
        
        .highlight-card .card-title {
            color: white;
            border-bottom-color: rgba(255, 255, 255, 0.2);
        }
        
        .top-student, .lowest-student {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .student-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .student-info h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .student-info p {
            opacity: 0.9;
            font-size: 0.9rem;
        }
        
        .marks {
            font-size: 1.3rem;
            font-weight: 700;
            margin-left: auto;
        }
        
        @media (max-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
            
            .stats-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Student Mini Dashboard</h1>
            <p class="subtitle">Comprehensive overview of student performance and statistics</p>
        </header>
        
        <div class="dashboard">
            <div class="card highlight-card">
                <h2 class="card-title">Performance Highlights</h2>
                <?php
                $students = [
                    [
                        "name" => "Jubayer Rahman Oree",
                        "roll" => 1,
                        "section" => "B",
                        "marks" => 98
                    ],
                    [
                        "name" => "Jubayer Rahman",
                        "roll" => 2,
                        "section" => "B",
                        "marks" => 78
                    ],
                    [
                        "name" => "Zakir Rahman",
                        "roll" => 3,
                        "section" => "B",
                        "marks" => 83
                    ],
                    [
                        "name" => "Zakir Khan",
                        "roll" => 4,
                        "section" => "B",
                        "marks" => 75
                    ],
                    [
                        "name" => "Farhan Islam",
                        "roll" => 5,
                        "section" => "A",
                        "marks" => 88
                    ],
                    [
                        "name" => "Mahin Chowdhury",
                        "roll" => 6,
                        "section" => "C",
                        "marks" => 67
                    ],
                    [
                        "name" => "Arafat Hasan",
                        "roll" => 7,
                        "section" => "A",
                        "marks" => 72
                    ],
                    [
                        "name" => "Rakibul Karim",
                        "roll" => 8,
                        "section" => "C",
                        "marks" => 61
                    ],
                    [
                        "name" => "Shadman Khan",
                        "roll" => 9,
                        "section" => "A",
                        "marks" => 55
                    ],
                    [
                        "name" => "Rizvi Ahmed",
                        "roll" => 10,
                        "section" => "B",
                        "marks" => 49
                    ],
                    [
                        "name" => "Saikat Das",
                        "roll" => 11,
                        "section" => "C",
                        "marks" => 33
                    ],
                    [
                        "name" => "Tamim Iqbal",
                        "roll" => 12,
                        "section" => "A",
                        "marks" => 41
                    ],
                    [
                        "name" => "Adnan Tareq",
                        "roll" => 13,
                        "section" => "C",
                        "marks" => 38
                    ],
                    [
                        "name" => "Tanim Hossain",
                        "roll" => 14,
                        "section" => "B",
                        "marks" => 19
                    ],
                    [
                        "name" => "Shuvo Roy",
                        "roll" => 15,
                        "section" => "B",
                        "marks" => 29
                    ],
                    [
                        "name" => "Emon Siddique",
                        "roll" => 16,
                        "section" => "C",
                        "marks" => 25
                    ],
                    [
                        "name" => "Limon Akter",
                        "roll" => 17,
                        "section" => "A",
                        "marks" => 22
                    ]
                ];

                // Find top and lowest scorers
                $highestMarksStudent = $students[0];
                $lowestMarksStudent = $students[0];

                foreach ($students as $student) {
                    if ($student["marks"] > $highestMarksStudent["marks"]) {
                        $highestMarksStudent = $student;
                    }
                    if ($student["marks"] < $lowestMarksStudent["marks"]) {
                        $lowestMarksStudent = $student;
                    }
                }
                ?>
                <div class="top-student">
                    <div class="student-avatar">T</div>
                    <div class="student-info">
                        <h3>Top Scorer</h3>
                        <p><?php echo $highestMarksStudent['name']; ?></p>
                    </div>
                    <div class="marks"><?php echo $highestMarksStudent['marks']; ?></div>
                </div>
                <div class="lowest-student">
                    <div class="student-avatar">L</div>
                    <div class="student-info">
                        <h3>Lowest Scorer</h3>
                        <p><?php echo $lowestMarksStudent['name']; ?></p>
                    </div>
                    <div class="marks"><?php echo $lowestMarksStudent['marks']; ?></div>
                </div>
            </div>
            
            <div class="card">
                <h2 class="card-title">Overall Statistics</h2>
                <div class="stats-container">
                    <?php
                    // Section counts
                    $A = 0;
                    $B = 0;
                    $C = 0;
                    
                    foreach($students as $student){
                        switch($student['section']){
                            case "A": $A++; break;
                            case "B": $B++; break;
                            case "C": $C++; break;
                        }
                    }
                    
                    // Pass/Fail counts
                    $Pass = 0;
                    $Fail = 0;
                    
                    foreach ($students as $student){
                        if ($student["marks"] >= 50) {
                            $Pass++;
                        } else {
                            $Fail++;
                        }
                    }
                    
                    $passingPercentage = ($Pass * 100) / count($students);
                    ?>
                    <div class="stat-card">
                        <div class="stat-value"><?php echo count($students); ?></div>
                        <div class="stat-label">Total Students</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value pass"><?php echo $Pass; ?></div>
                        <div class="stat-label">Passed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value fail"><?php echo $Fail; ?></div>
                        <div class="stat-label">Failed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value"><?php echo round($passingPercentage); ?>%</div>
                        <div class="stat-label">Pass Rate</div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <h2 class="card-title">Section Distribution</h2>
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-value section-a"><?php echo $A; ?></div>
                        <div class="stat-label">Section A</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value section-b"><?php echo $B; ?></div>
                        <div class="stat-label">Section B</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value section-c"><?php echo $C; ?></div>
                        <div class="stat-label">Section C</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <h2 class="card-title">Student List</h2>
            <div class="student-list">
                <?php
                function getGrade($marks) {
                    switch(true){
                        case ($marks >= 80): return "A";
                        case ($marks >= 70): return "B";
                        case ($marks >= 60): return "C";
                        case ($marks >= 50): return "D";
                        case ($marks >= 40): return "E";
                        default: return "F";
                    }
                }
                
                foreach($students as $student){
                    $grade = getGrade($student["marks"]);
                    echo '<div class="student-item">';
                    echo '<div>';
                    echo '<div class="student-name">' . $student["name"] . '</div>';
                    echo '<div class="student-details">Roll: ' . $student["roll"] . ' | Section: ' . $student["section"] . ' | Marks: ' . $student["marks"] . '</div>';
                    echo '</div>';
                    echo '<span class="grade grade-' . strtolower($grade) . '">' . $grade . '</span>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>