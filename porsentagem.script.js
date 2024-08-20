<script>
    function calculateResults() {
        const form = document.getElementById('autism-questionnaire');
        const formData = new FormData(form);
        let score = 0;
        let totalQuestions = 20; 
        
        formData.forEach((value, key) => {
            if (value === 'sim') {
                score++;
            }
        });

        
        const percentage = (score / totalQuestions) * 100;

        
        window.location.href = `resultados.html?score=${percentage.toFixed(2)}`;
    }
</script>
