# TASK3: Speech Recognition


## Table of Contents ⚙️
- [Project Description](#project-description)
- [Technologies Used](#technologies-used)
- [Code Explanation](#code-explanation)
  - [HTML (index.html)](#html-indexhtml)
  - [CSS (styles.css)](#css-stylescss)
  - [JavaScript (speech_to_text.js)](#javascript-speech_to_textjs)
  - [PHP (save_text.php)](#php-save_textphp)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Features](#features)

## Project Description 📝
The Speech Recognition project provides a simple and intuitive web interface for converting speech to text. The interface includes buttons to start and stop recording, and a text area to display the transcribed text. The transcribed text is saved to a MySQL database for logging and further actions.

## Technologies Used 🔧

- **HTML**: To structure the web pages.
- **CSS**: To style the interface and provide a user-friendly design.
- **JavaScript**: To handle speech recognition, send the transcribed text to the server, and display it.
- **PHP**: To handle server-side operations and interact with the MySQL database.
- **MySQL**: To store and retrieve the transcribed text.

## Code Explanation 👩🏻‍🏫

### HTML (index.html)

This file defines the structure of the speech-to-text converter web page. It includes buttons to start and stop recording and a textarea to display the transcribed text. It links to the external CSS for styling and JavaScript for functionality.

### CSS (styles.css)

This file styles the speech-to-text converter page to make it visually appealing and user-friendly. It defines the appearance of the buttons, textarea, and the sound wave effect.

### JavaScript (speech_to_text.js)

This file handles the speech recognition process, sends the transcribed text to the server, and displays the text in the textarea.

### PHP (save_text.php)

This file processes the transcribed text sent from the front end and saves it to a MySQL database.

## Installation 🗺️

1. **Clone the repository**:
    ```sh
    git clone https://github.com/yourusername/speech-recognition.git
    cd speech-recognition
    ```

2. **Set up the database**:
    - Create a MySQL database named `record`.
    - Create a table named `speech_texts` with the following structure:
        ```sql
        CREATE TABLE speech_texts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            text TEXT NOT NULL
        );
        ```

3. **Configure database connection**:
    - Update the database connection parameters in `save_text.php`:
        ```php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "record";
        ```

4. **Run the project**:
    - Ensure you have a local server setup (e.g., XAMPP, WAMP).
    - Place the project folder in the `htdocs` directory (for XAMPP) or the appropriate directory for your server setup.
    - Start the server and navigate to `http://localhost/speech-recognition` in your web browser.

## Usage 🤖

1. **Start Recording**:
    - Click the "Start Recording" button to begin capturing speech.
    - Speak clearly into your microphone.

2. **Stop Recording**:
    - Click the "Stop Recording" button to end the recording.
    - The transcribed text will appear in the textarea and be saved to the database.

## File Structure 🏗️

```
speech-recognition/
│
├── HTML/
│   └── index.html
├── css/
│   └── styles.css
├── js/
│   └── speech_to_text.js
├── PHP/
│   └── save_text.php
├── README.md
```

- `HTML/index.html`: The main HTML file that contains the structure of the speech-to-text converter interface.
- `css/styles.css`: The CSS file for styling the speech-to-text converter interface.
- `js/speech_to_text.js`: The JavaScript file for handling the speech recognition and sending the transcribed text to the server.
- `PHP/save_text.php`: The PHP file for saving the transcribed text to the database.
- `README.md`: This file, containing information about the project.

## ⭐️ Features ⭐️

- **Speech Recognition**: Convert spoken words to text using the web interface.
- **Save Transcribed Text**: Automatically save the transcribed text to a MySQL database.
- **User-Friendly Interface**: Easy-to-use buttons to start and stop recording, with visual feedback.
- **Real-Time Display**: View the transcribed text in real-time as you speak.

##  Speech Recognition Program Video 🎥
https://github.com/user-attachments/assets/0e896ada-e288-40fb-b17f-9e3b1fc5d035

Note: I wanted to add more to the video, but GitHub only allows video files up to 10 MB.🥲

Made with love by the "she codes team" 🤍😄


raghd Alshammari - sadeem alresaini - razan alothaim.
