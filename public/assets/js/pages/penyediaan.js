function submitPenyediaanForm(event) {
    event.preventDefault();

    const form = $(event.target);
    
    const rowForm = $('.row-form');
    const row = `
        <tr>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
            <td class="text-center">New</td>
        </tr>
    `;

    rowForm.after($(row));
}