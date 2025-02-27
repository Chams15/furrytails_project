<!-- Main modal -->
<div id="addAppointment-modal" tabindex="-1" aria-hidden="true" class="tw-hidden tw-fixed tw-top-0 tw-left-0 tw-right-0 tw-z-50 tw-w-full tw-p-4 tw-overflow-x-hidden tw-overflow-y-auto md:tw-inset-0 tw-h-full tw-max-h-full tw-flex tw-items-center tw-justify-center tw-backdrop-blur-sm tw-bg-black/30">
    <div class="tw-relative tw-w-full tw-max-w-md tw-max-h-full tw-animate-modal-entry">
        <!-- Modal content -->
        <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow-sm dark:tw-bg-gray-700 tw-transform tw-transition-all">
            <!-- Modal header -->
            <div class="tw-flex tw-items-center tw-justify-between tw-p-4 md:tw-p-5 tw-border-b tw-rounded-t dark:tw-border-gray-600 tw-border-gray-200">
                <h3 class="tw-text-lg tw-font-semibold tw-text-gray-900 dark:tw-text-white">Add Pet Appointment</h3>
                <button type="button" class="tw-text-gray-400 tw-bg-transparent tw-hover:tw-bg-gray-200 tw-hover:tw-text-gray-900 tw-rounded-lg tw-text-sm tw-w-8 tw-h-8 ms-auto tw-inline-flex tw-justify-center tw-items-center dark:tw-hover:tw-bg-gray-600 dark:tw-hover:tw-text-white" data-modal-toggle="addAppointment-modal">
                    <svg class="tw-w-3 tw-h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="tw-p-4 md:tw-p-5">
                <div class="tw-grid tw-gap-4 tw-mb-4 tw-grid-cols-2">
                    <div class="tw-col-span-2">
                        <label for="selected-pet" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Pet Name</label>
                        <select id="selected-pet" class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-600 dark:tw-border-gray-500 dark:tw-placeholder-gray-400 dark:tw-text-white dark:tw-focus:tw-ring-primary-500 dark:tw-focus:tw-border-primary-500">
                            <!-- Connect to the database -->
                            <!-- placeholders -->
                            <option selected="">Select Pet</option>
                            <option value="1">Buddy</option>
                            <option value="2">Moodeng</option>
                        </select>                    
                    </div>
                    <div class="tw-col-span-2 sm:tw-col-span-1">
                        <label for="appointment-date" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Date</label>
                        <input type="date" name="appointment-date" id="appointment-date" class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg tw-focus:tw-ring-primary-600 tw-focus:tw-border-primary-600 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-600 dark:tw-border-gray-500 dark:tw-placeholder-gray-400 dark:tw-text-white dark:tw-focus:tw-ring-primary-500 dark:tw-focus:tw-border-primary-500" required="">
                    </div>
                    <div class="tw-col-span-2 sm:tw-col-span-1">
                        <label for="appointment-time" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Time</label>
                        <!-- The available times should depend on the database, depending on the selected date -->
                        <select id="appointment-time" name="appointment-time" class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-600 dark:tw-border-gray-500 dark:tw-placeholder-gray-400 dark:tw-text-white dark:tw-focus:tw-ring-primary-500 dark:tw-focus:tw-border-primary-500" required="">
                            <option selected="">Select Time</option>
                            <!-- Placeholder options, should be populated based on the selected date -->
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                        </select>
                    </div>
                    <div class="tw-col-span-2">
                        <label for="service" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Service</label>
                        <select id="service" class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg tw-focus:tw-ring-primary-500 tw-focus:tw-border-primary-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-600 dark:tw-border-gray-500 dark:tw-placeholder-gray-400 dark:tw-text-white dark:tw-focus:tw-ring-primary-500 dark:tw-focus:tw-border-primary-500">
                            <!-- Connect to the database -->
                            <!-- placeholders -->
                            <option selected="">Select service</option>
                            <option value="Grooming">Grooming</option>
                            <option value="Checkup">Checkup</option>
                            <option value="Vaccination">Vaccination</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="tw-text-white tw-inline-flex tw-items-center tw-bg-[#24CFF4] hover:tw-bg-[#63e4fd] focus:tw-outline-none focus:tw-bg-[#038cb7] tw-font-medium tw-rounded-lg tw-text-sm tw-px-5 tw-py-2.5 tw-text-center">
                    <svg class="tw-me-1 tw--ms-1 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Proceed to Payment</span>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const appointmentModal = document.getElementById('addAppointment-modal');
    const form = appointmentModal.querySelector('form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // ... existing validation code ...

        Swal.fire({
            title: 'Confirm Appointment',
            text: 'Would you like to proceed with the payment?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#24CFF4',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, proceed',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Get payment modal and its elements
                const paymentModal = document.getElementById('payment-modal');
                
                if (paymentModal) {
                    // Update payment modal content
                    const modalTitle = paymentModal.querySelector('#modal-title');
                    const detailsLabel = paymentModal.querySelector('#details-label');
                    const submitButtonText = paymentModal.querySelector('#submit-button-text');
                    const appointmentDetails = paymentModal.querySelector('#appointment-details');
                    
                    // Get selected values
                    const petName = document.getElementById('selected-pet').options[document.getElementById('selected-pet').selectedIndex].text;
                    const date = document.getElementById('appointment-date').value;
                    const time = document.getElementById('appointment-time').value;
                    const service = document.getElementById('service').value;
                    
                    // Update modal text
                    if (modalTitle) modalTitle.textContent = 'Appointment Payment';
                    if (detailsLabel) detailsLabel.textContent = 'Appointment';
                    if (submitButtonText) submitButtonText.textContent = 'Add Appointment';
                    if (appointmentDetails) {
                        appointmentDetails.value = `Pet: ${petName}\nService: ${service}\nDate: ${date}\nTime: ${time}`;
                    }
                    
                    // Hide appointment modal first
                    appointmentModal.classList.add('tw-hidden');
                    
                    // Show payment modal after a small delay
                    setTimeout(() => {
                        paymentModal.classList.remove('tw-hidden');
                    }, 100);
                }
            }
        });
    });

    // Add close button handler
    const closeBtn = appointmentModal.querySelector('[data-modal-toggle="addAppointment-modal"]');
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            appointmentModal.classList.add('tw-hidden');
        });
    }
});
</script>