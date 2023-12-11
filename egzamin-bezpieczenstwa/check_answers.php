<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieranie odpowiedzi z formularza
    $answers = [
        'q1' => $_POST['q1'],
        'q2' => $_POST['q2'],
        'q3' => $_POST['q3'],
        'q4' => $_POST['q4'],
        'q5' => $_POST['q5'],
        'q6' => $_POST['q6'],
        'q7' => $_POST['q7'],
        'q8' => $_POST['q8'],
        'q9' => $_POST['q9'],
        'q10' => $_POST['q10'],
    ];

    // Przykładowe sprawdzenie poprawności odpowiedzi
    $correctAnswers = [
        'q1' => 'b',
        'q2' => 'b',
        'q3' => 'b',
        'q4' => 'a',
        'q5' => 'a',
        'q6' => 'b',
        'q7' => 'a',
        'q8' => 'a',
        'q9' => 'b',
        'q10' => 'b',
    ];

    $score = 0;

    foreach ($correctAnswers as $question => $correctAnswer) {
        if ($correctAnswer === $answers[$question]) {
            $score++;
        }
    }

    // Wyświetlanie wyniku
    echo "Twój wynik to: $score / " . count($correctAnswers);
}
?>
