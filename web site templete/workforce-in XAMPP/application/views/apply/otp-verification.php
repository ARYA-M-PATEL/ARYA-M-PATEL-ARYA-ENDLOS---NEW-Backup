<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12 text-left">
        <div class="form-group xb-item--field">
            <fieldset name='number-code' data-number-code-form>
                <input type="number" name="code[]" min='0' max='9' data-number-code-input='0' required autofocus />
                <input type="number" name="code[]" min='0' max='9' data-number-code-input='1' required />
                <input type="number" name="code[]" min='0' max='9' data-number-code-input='2' required />
                <input type="number" name="code[]" min='0' max='9' data-number-code-input='3' required />
                <input type="number" name="code[]" min='0' max='9' data-number-code-input='4' required />
                <input type="number" name="code[]" min='0' max='9' data-number-code-input='5' required />
            </fieldset>
        </div>
    </div>
    <div class="col-12">
        <?= anchor('apply', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/login-information', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>
<style>
    input {
        width: 2.75rem;
        height: 2.75rem;
        padding: 0 !important;
        text-align: center;
        border: 1px solid lightgrey;
        border-radius: 0.5rem;
        background: linear-gradient(145deg, #e6e6e6, #ffffff);
    }

    @media only screen and (min-width: 400px) {
        input {
            padding: 0 !important;
            width: auto;
            height: 50px;
            text-align: center;
            border: 1px solid lightgrey;
            border-radius: 0.5rem;
            background: linear-gradient(145deg, #e6e6e6, #ffffff);
        }
    }

    input:focus {
        border: 2px solid #10b467;
        box-shadow: 0 0 2px 2px #10b4676a;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    }
</style>
<script>
    // Elements
    const numberCodeForm = document.querySelector('[data-number-code-form]');
    const numberCodeInputs = [...numberCodeForm.querySelectorAll('[data-number-code-input]')];

    // Event callbacks
    const handleInput = ({target}) => {
        if (!target.value.length) { return target.value = null; }
        
        const inputLength = target.value.length;
        let currentIndex = Number(target.dataset.numberCodeInput);
        
        if (inputLength > 1) {
            const inputValues = target.value.split('');
            
            inputValues.forEach((value, valueIndex) => {
            const nextValueIndex = currentIndex + valueIndex;
            
            if (nextValueIndex >= numberCodeInputs.length) { return; }
            
            numberCodeInputs[nextValueIndex].value = value;
            });
            
            currentIndex += inputValues.length - 2;
        }
        
        const nextIndex = currentIndex + 1;
        
        if(nextIndex < numberCodeInputs.length) {
            numberCodeInputs[nextIndex].focus();
        }
        
        if(currentIndex === 4) {
            $(".apply-form").trigger('submit');
        }
    }

    const handleKeyDown = e => {
        const {code, target} = e;
        
        const currentIndex = Number(target.dataset.numberCodeInput);
        const previousIndex = currentIndex - 1;
        const nextIndex = currentIndex + 1;
        
        const hasPreviousIndex = previousIndex >= 0;
        const hasNextIndex = nextIndex <= numberCodeInputs.length - 1
        
        switch(code) {
            case 'ArrowLeft':
            case 'ArrowUp':
            if (hasPreviousIndex) {
                numberCodeInputs[previousIndex].focus();
            }
            e.preventDefault();
            break;
            
            case 'ArrowRight':
            case 'ArrowDown':
            if (hasNextIndex) {
                numberCodeInputs[nextIndex].focus();
            }
            e.preventDefault();
            break;
            case 'Backspace':
            if (!e.target.value.length && hasPreviousIndex) {
                numberCodeInputs[previousIndex].value = null;
                numberCodeInputs[previousIndex].focus();
            }
            break;
            default:
            break;
        }
    }

    // Event listeners
    numberCodeForm.addEventListener('input', handleInput);
    numberCodeForm.addEventListener('keydown', handleKeyDown);
</script>