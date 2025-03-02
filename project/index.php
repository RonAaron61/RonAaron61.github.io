<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Portfolio</title>
        <link rel="stylesheet" href="assets/style.css?v=<?= filemtime('assets/style.css') ?>">
    </head>
    <body>
    <aside class="topNav" id="topNav">
            <div class="container-fluid">
                <a href="https://ronaaron61.github.io">
                    <h2> Home </h2>
                </a>

                <a href="https://ronaaron61.github.io/about/">
                    <h2> About </h2>
                </a>
            </div>
        </aside>
        
        <div class="project-container">
            <h1>Projects</h1>

            <div class="project">
                <h3>
                    <span class="circle blue"></span> Persoal Fun Projects
                </h3>
                <p>
                    Sometimes I try to make something in my spare time. Sometimes useful things and 
                    sometimes useless things. Although sometimes the things I make are not 
                    perfect but this can add to my experience of trial and error                  
                </p>
                <h3>
                    <span class="circle orange"></span> Work Related Projects
                </h3>
                <p>
                    Some of the projects are also related to my current jobs, or maybe it's a collab
                    between a group.                 
                </p>
                <h3><span class="star blue"></span>Finished Projects</h3>
                <p>
                    The project is done, but it may still be updated in the future
                </p>
                <h3><span class="star green"></span>Somewhat Finished for now Projects.</h3>
                <p>
                    The project is somewhat done or already do what it should do or maybe on uphold, but I still unsatisfy with the result, and may still want to continue develop it.
                </p>
                <h3><span class="star orange"></span>Unfinished/on-going Projects</h3>
                <p>
                    The project is still an on-going or Unfinished project.
                </p>
            </div>
            <br><br><br>

            <div class="year-section">
                <h2>2025</h2>
                <div class="container">
                    <div class="project">
                        <h3><span class="circle orange"></span><span class="star blue"></span> airbilinest.com</h3>
                        <p>Developing the main website for airbilinest.com. Language used: HTML, PHP, CSS, and JavaScript. This is a project
                            that also part of my jobs at Medika Karya Airlangga
                        </p>
                        <a href="airbilinest.com">Visit the project &gt;&gt;</a>
                    </div>
                </div>
            </div>

            <div class="year-section">
                <h2>2024</h2>
                <div class="container">
                    <div class="project">
                        <h3><span class="circle orange"></span><span class="star blue"></span>AirBiliNest Application</h3>
                        <p>Developing the application to control and monitor AirBiliNest devices. Airlangga Bilirubin Nesting is a phototherapy device
                            for jaundiced baby. The app is connected to the controler of the AirBiliNest and show the temp, humidity, heart-rate, SpO2, the length of phototherapy, and to control the intensity.
                            The application also have patient health data, settings, connected to BiliNorm, and the airbilinest.com
                        </p>
                        <a href="airbilinest.com/hcp/download/download.php">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle orange"></span><span class="star blue"></span>medikakaryaairlangga.com</h3>
                        <p>Developing the main website for medikakaryaairlangga.com. Language used: HTML, CSS, and JavaScript. This is a project
                            that also part of my jobs at Medika Karya Airlangga.
                        </p>
                        <a href="medikakaryaairlangga.com">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star green"></span>MyEIT V1.2</h3>
                        <p>This is a updated version of my previous EIT project using microcontroler</p>
                        <a href="https://github.com/RonAaron61/MyEIT-V1.2">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>LDR Camera Sensor</h3>
                        <p>In this project I created a simple camera sensor using 64 LDR or photoresistor sensor, resulting 8x8 pixel
                            image. The sensor is controlled using microcontroller to control the de/multiplexer to gather the data on all
                            photoresistor
                        </p>
                        <img src="assets/image/CameraS_1.png" alt="Camera Sensor" width="auto" height="auto"> <br>
                        <a href="https://github.com/RonAaron61/LDR-Camera-Sensor">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star green"></span>Simple BiliMeter Sensor</h3>
                        <p>Creating a bili-meter sensor, which is a spectroradiometer that measures the therapeutic radiation
                            (radiant power) of neonatal phototherapy lamps used for treating jaundice in infants. This sensor
                            measures the radiant power of blue light in units of µW/cm^2/nm^1. In the development of this device, a Microcontroller
                            and the TCS34725 sensor (an RGB sensor) are used. The light data collected is then compared
                            with an existing device, the GE Ohmeda Biliblanket Light Meter 2, to obtain a trend line
                            in the form of linear and polynomial regression. This trend line is then used to convert the raw sensor data
                            into radiant power.</p>
                        <a href="https://github.com/RonAaron61/BiliMeter-Sensor">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>MyEIT V1.1</h3>
                        <p>This is an updated version of my previous EIT project using microcontroler, Including:
                            <li>Adding buffer and resistor value changes in VCCS</li>
                            <li>Positive to negative voltage -> now using TPS60400</li>
                            <li>Some DIP components change to SMD components for simplicity and more compact size</li>
                            <li>Adding the calibration equation to the ADS1115</li>
                            <li>Adding new tester point</li>
                        </p>
                        <a href="https://github.com/RonAaron61/MyEIT-V1.1">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>EIT-Microcontroller</h3>
                        <p>Started on 2023 and finished on 2024 | Making Electrical Impedance Tomography (EIT) using a Microcontroller, 
                            namely ESP32-S2 with MicroPython. This tool consists of a microcontroller which functions 
                            to control the electrode output, regulate the signal frequency, and obtain data. 
                            Then the data will be processed using the Python program with the PyEIT library to reconstruct the resulting data into a 2D image.
                        </p>
                        <img src="assets/image/EIT_Result2.png" alt="EIT" width="auto" height="auto"><br>
                        <a href="https://github.com/RonAaron61/EIT-Microcontroller">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Hand angle estimation using bioimpedance</h3>
                        <p> Using a previous project, the bioimpedance of a human hand can be used to estimate the angle at the human elbow, 
                            which can be used to move a robotic hand.
                        </p>
                        <img src="assets/image/Bioimpedance_hand2.png" alt="Bioimpedance" width="auto" height="auto"><br>
                        <a href="https://github.com/RonAaron61/Bioimpedance_measure_microcontroller/blob/main/AD9833.md">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Bioimpedance measure using Microcontroller</h3>
                        <p>Started on 2023 and finished on 2024 | A device for measuring a person's bioimpedance, using a microcontroller as a signal processor and 
                            reader for measurement results, and displaying them. The tool made consists of a signal generator 
                            which uses a Wien bridge oscillator circuit and AD9833 Module to produce a sine signal, 
                            then VCCS to convert the voltage input into a current source so that it is safe when it enters the body, 
                            then the signal read using an instrument amplifier as an amplifier for easy reading, and converted into a DC signal 
                            to be read by the microcontroller. The results of the tool can read 
                            the impedance value both on the resistor and on the human body.
                        </p>
                        <img src="assets/image/Bioimpedance_Prototype.jpg" alt="Bioimpedance" width="auto" height="auto">  
                        <a href="https://github.com/RonAaron61/Bioimpedance_measure_microcontroller">Visit the project &gt;&gt;</a>
                    </div>
                    
                </div>
            </div>

            <div class="year-section">
                <h2>2023</h2>
                <div class="container">
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>EMG-ECG Module for Microcontroller</h3>
                        <p>I try making an EMG-ECG module for a microcontroller like Arduino or ESP. 
                            The module consists of instrument amplifier using AD620 IC and some basic 
                            bandpass filters with an inverting amplifier using Op-amp IC. After some 
                            adjustment in the gain, the module can detect muscle movement in the forearm
                            flexor muscle and heartbeat, with only 3 connections to the microcontroller 
                            (2 for the supply and 1 for the output). Then the output of the signal I try to 
                            used it as a signal to move robotic hand.
                        </p>
                        <img src="assets/image/ECG_1.png" alt="EMG" width="auto" height="auto"> <br>
                        <a href="https://github.com/RonAaron61/EMG-ECG_Arduino">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Smart trash bin</h3>
                        <p> In this project I created an IoT trash can that can automatically open when there is a hand 
                            in front of the trash can, or when there is a knock/push. So users don't need to touch the trash can, 
                            thereby reducing the possibility of spreading germs or disease through the trash can. 
                            This trash can also has a sensor to find out whether the contents of the trash can are full or not, 
                            and can be seen via the blink application because this trash can is also connected to the internet.
                        </p>
                        <img src="assets/image/smartTrash.jpg" alt="EMG" width="auto" height="auto"> <br>
                        <a href="https://github.com/RonAaron61/smart_trashbin">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Simple face follower "CCTV" camera</h3>
                        <p> A camera that can follow a person's facial position automatically. This tool uses a webcam camera as video input, 
                            which will then be read by a Python program using the OpenCV and Mediapipe libraries to detect the position of the face 
                            and send the face position to the Arduino which is then used to move the servo motor to move the webcam camera to the position of the target face. 
                        </p>
                        <!-- <img src="assets/image/smartTrash.jpg" alt="EMG" width="auto" height="auto"> <br> -->
                        <a href="https://github.com/RonAaron61/Face-following-camera">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Face following eye</h3>
                        <p> Same like the previous project, but the output of this device is not to move a camera
                            but from the face coordinate it can be used to move an eye animation, so it can always look
                            at the subject. Uisng the 0.96" OLED to displat the image. 
                        </p>
                        <!-- <img src="assets/image/smartTrash.jpg" alt="EMG" width="auto" height="auto"> <br> -->
                        <a href="https://github.com/RonAaron61/EyeFollowingFace">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Conway's game of life</h3>
                        <p> Create a Conway's Game of Life application using the Python program with the PyGame library, 
                            where users can adjust the size of the game area and the starting location of the game. 
                        </p>
                        <!-- <img src="assets/image/smartTrash.jpg" alt="EMG" width="auto" height="auto"> <br> -->
                        <a href="https://github.com/RonAaron61/Game-of-life-Conway">Visit the project &gt;&gt;</a>
                    </div>
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span>Euler Magic Square</h3>
                        <p> Trying to make program that can make magic square on any size, but curently the sum of the diagonal is still not matching the sum of row and column.
                        </p>
                        <!-- <img src="assets/image/smartTrash.jpg" alt="EMG" width="auto" height="auto"> <br> -->
                        <a href="https://github.com/RonAaron61/Euler-Magic-Square">Visit the project &gt;&gt;</a>
                    </div>


                </div>
            </div>
            
            <div class="year-section">
                <h2>2022</h2>
                <div class="container">
                    <div class="project">
                        <h3><span class="circle blue"></span><span class="star blue"></span> Virtual Mouse and Keyboard</h3>
                        <p>  I'm making virtual mouse and keyboard using camera as the input. The camera
                            detect the location of my hand and map it with the width and height of the monitor
                            then move the cursor to certain location, work the same with the keyboard. 
                            I'm satisfied with the result, although it's not perfect, and still open to further development.
                        </p>
                        <img src="assets/image/V_keyboard.jpg" alt="EMG" width="auto" height="auto"> <br>
                        <a href="https://github.com/RonAaron61/Virtual-Mouse-Keyboard">Visit the project &gt;&gt;</a>
                    </div>


                </div>
            </div>

        </div>
    </body>
</html>