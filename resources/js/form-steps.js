
const progressBar = document.querySelector(".progress-bar");
const labelsContainer = progressBar && document.querySelector(".labels-container");
const fieldsetsNodeList = progressBar && document.querySelectorAll(".register fieldset");
const nextBtnsNodeList = progressBar && document.querySelectorAll("[type=button]");

const progressBarLabels =
    labelsContainer && Array.from(labelsContainer.children);
const fieldsets = fieldsetsNodeList && Array.from(fieldsetsNodeList);
const nextBtns = nextBtnsNodeList && Array.from(nextBtnsNodeList);

class StepFormController {
    constructor(steps, labels, progressBar, nextBtns, prevBtns) {
        this.steps = steps;
        this.labels = labels;
        this.progressBar = progressBar;
        this.nextBtns = nextBtns;
        this.prevBtns = prevBtns;
        this.init();
    }

    #to = {
        next: 1,
        previous: 0,
    };

    #current = {
        step: 0,
        label: 0,
    };

    #by = {
        incrementing: 1,
        decrementing: -1,
    }

    checkArg(arg, argName, isOptional = true, canBeElement = true, mustBeElement = false) {
        if (isOptional && typeof arg === 'undefined') return;

        if (mustBeElement && !(arg instanceof Element))
            throw new TypeError(`Parameter ${argName} must be an instance of Element. Received an instance of ${arg.constructor.name} instead.` );

        if (!Array.isArray(arg)
            && !(arg instanceof NodeList)
            && ((canBeElement && !(arg instanceof Element)) || (!canBeElement)))
            throw new TypeError(`Paramenter ${argName} must be an instance of Array${!canBeElement ? ' or NodeList' : ', NodeList or Element'}. Received an instance of ${arg.constructor.name} instead.`);

        if (!arg.length && (Array.isArray(arg) || arg instanceof NodeList))
            throw new TypeError(`Parameter ${argName} cannot be empty.`);

        !(arg instanceof Element) && arg.forEach(argField => {
            if (!(argField instanceof Element)) {
                throw new TypeError(`Paramenter ${argName} must contain only instances of Element, but contains ${argField.constructor.name} instead.`);
            }
        });
    }

    argsAreValid() {
        this.checkArg(this.steps, 'steps', false, false);
        this.checkArg(this.labels, 'labels', true, false);
        this.checkArg(this.progressBar, 'progressBar', true, true, true);
        this.checkArg(this.nextBtns, 'nextBtns', false, true);
        this.checkArg(this.prevBtns, 'prevBtns');
    }

    init() {
        this.argsAreValid();
        this.labels && this.hideLabels();

        this.nextBtns.forEach((btn) =>
            btn.addEventListener("click", () => {
                this.labels && this.switchLabel(this.#to.next);
                this.progressBar && this.resizeProgressBar(this.#by.incrementing);
                this.switchSteps(this.#to.next)
            })
        );

        this.prevBtns?.forEach((btn) =>
            btn.addEventListener("click", () => {
                this.labels && this.switchLabel(this.#to.previous);
                this.progressBar && this.resizeProgressBar(this.#by.decrementing);
                this.switchSteps(this.#to.previous)
            })
        );
    }

    hideLabels() {
        this.labels?.slice(1).forEach((label) => (label.style.display = "none"));
    }

    switchLabel(toNext) {
        this.labels[this.#current.label].style.display = "none";
        if (toNext) return this.labels[++this.#current.label].style.display = "block";
        this.labels[--this.#current.label].style.display = "block";
    }

    progressBarStep() {
        return this.progressBar.getAttribute('aria-valuemax') / this.labels.length;
    }

    resizeProgressBar(widthAdded) {
        const currentWidth = Number(this.progressBar.style.width.slice(0, -1));

        widthAdded *= this.progressBarStep();

        this.progressBar.style.width = `${currentWidth + widthAdded}%`;
        this.progressBar.setAttribute("aria-valuenow", `${currentWidth + widthAdded}%`);
    };

    switchSteps(toNext) {
        this.steps[this.#current.step].removeAttribute('aria-current');
        if (toNext) return this.steps[++this.#current.step].setAttribute('aria-current', 'step');
        this.steps[--this.#current.step].setAttribute('aria-current', 'step');

    }

}

const formStep = progressBar && new StepFormController(fieldsets, progressBarLabels, progressBar, nextBtns);

