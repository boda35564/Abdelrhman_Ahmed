// تغيير الوضع المظلم
const toggleDarkModeButton = document.getElementById('toggle-dark-mode');
const body = document.body;

toggleDarkModeButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
});

// تحميل الوضع المظلم بناءً على إعدادات المستخدم
if (localStorage.getItem('darkMode') === 'true') {
    body.classList.add('dark-mode');
}

// إظهار تفاصيل الإنجاز عند النقر
function toggleDetails(achievementId) {
    const achievement = document.getElementById(achievementId);
    achievement.style.display = achievement.style.display === 'block' ? 'none' : 'block';
}
