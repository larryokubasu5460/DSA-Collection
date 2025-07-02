// we can use the letters in the first word
        // to check all other words
        $letters = str_split($words[0]);
        $letters_by_count = array_count_values($letters);

        // remove first word as we're accounting for it's
        // letters in our orginal check
        unset($words[0]);

        foreach ($words as $word) {
            $current_word_letters_by_count = array_count_values(str_split($word));

            // check all letters in our first word agianst letters in the current word
            foreach ($letters_by_count as $letter => $letter_count) {
                if (!isset($current_word_letters_by_count[$letter])) {
                    unset($letters_by_count[$letter]);
                    continue;
                }

                if ($current_word_letters_by_count[$letter] !== $letters_by_count[$letter]) {
                    $letters_by_count[$letter] = min(
                        [
                            $current_word_letters_by_count[$letter],
                            $letters_by_count[$letter]
                        ]
                    );
                }
            }
        }

        $ans = [];
        foreach ($letters_by_count as $letter => $l_count) {
            for ($i = 0; $i < $l_count; $i++) {
                $ans[] = $letter;
            }
        }
        return $ans;