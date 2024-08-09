function showSection(sectionId) {
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => section.classList.remove('active'));

    const activeSection = document.getElementById(sectionId);
    if (activeSection) {
        activeSection.classList.add('active');
    }
}

function updateGreeting() {
    const now = new Date();
    // Bangladesh Standard Time (BST) offset
    const bstOffset = 6 * 60 * 60 * 1000; // 6 hours in milliseconds
    const bstTime = new Date(now.getTime() + bstOffset);

    const hours = bstTime.getUTCHours(); // Using UTC hours for accurate BST offset

    const greetingElement = document.getElementById('greeting');
    const iconElement = document.getElementById('greeting-icon');

    let greetingText;
    let icon;

    // Determine greeting based on hours
    if (hours >= 5 && hours < 12) {
        greetingText = 'Good Morning';
        icon = '🌅';  // Sun icon
    } else if (hours >= 12 && hours < 18) {
        greetingText = 'Good Afternoon';
        icon = '☀️';  // Sun icon
    } else if (hours >= 18 && hours < 21) {
        greetingText = 'Good Evening';
        icon = '🌙';  // Moon icon
    } else {
        greetingText = 'Good Night';
        icon = '🌙';  // Moon icon
    }

    greetingElement.textContent = greetingText;
    iconElement.textContent = icon;
}

// Function to handle command input
function handleCommandInput(event) {
    if (event.key === 'Enter') {
        const inputElement = document.getElementById('cmd-input');
        const command = inputElement.value.trim(); // Use value instead of textContent
        inputElement.value = ''; // Clear input field

        // Map of commands to section IDs
        const commandMap = {
            'home': 'home',
            'about': 'about',
            'work': 'work',
            'skills': 'skills',
            'projects': 'projects',
            'contact': 'contact'
        };

        const sectionId = commandMap[command.toLowerCase()];
        if (sectionId) {
            showSection(sectionId);
        } else {
            console.log('Command not recognized:', command);
        }

        // Reset the command input prompt
        document.getElementById('cmd-cursor').style.opacity = '1';
    }
}

// Add event listener for the Enter key
document.getElementById('cmd-input').addEventListener('keydown', handleCommandInput);

// Function to create a blinking cursor effect
function startBlinkingCursor() {
    const cursor = document.getElementById('cmd-cursor');
    setInterval(() => {
        cursor.style.opacity = cursor.style.opacity === '1' ? '0' : '1';
    }, 500);
}

// Initialize the blinking cursor effect and greeting
window.addEventListener('load', () => {
    updateGreeting();
    startBlinkingCursor();
});

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'flex';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// Close modals when clicking outside the modal content
window.addEventListener('click', (event) => {
    if (event.target.classList.contains('modal')) {
        closeModal(event.target.id);
    }
});
