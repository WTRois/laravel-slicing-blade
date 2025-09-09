document.addEventListener('DOMContentLoaded', function () {
    const toastMessage = document.querySelector('body').dataset.toastMessage;
    const toastType = document.querySelector('body').dataset.toastType;
    if (toastMessage) {
        Toastify({
            text: toastMessage,
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true,
            style: {
                background: toastType === 'success' ? 'linear-gradient(to right, #8b5cf6, #a855f7)' : 'linear-gradient(to right, #ef4444, #f87171)',
                borderRadius: '0.5rem',
                boxShadow: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                fontFamily: 'Poppins, sans-serif',
                fontSize: '0.875rem',
                padding: '0.75rem 1rem',
                zIndex: 9999,
            },
            onClick: function () { }
        }).showToast();
    }
});
