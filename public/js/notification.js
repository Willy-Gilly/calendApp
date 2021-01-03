function prepareDatatables(locale)
{
    let datatableLang = '';
    switch (locale)
    {
        case 'fr':
            datatableLang = "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json";
            break;
        case 'it':
            datatableLang = "//cdn.datatables.net/plug-ins/1.10.20/i18n/Italian.json";
            break;
        case 'es':
            datatableLang = "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json";
            break;
        case 'de':
            datatableLang = "//cdn.datatables.net/plug-ins/1.10.20/i18n/German.json";
            break;
        default:
            datatableLang = "//cdn.datatables.net/plug-ins/1.10.20/i18n/English.json";
            break;
    }
    $('#friendRequestDatatable').DataTable({
        "language": {
            "url": datatableLang,
        },
    });
    $('#messageDatatable').DataTable({
        "language": {
            "url": datatableLang,
        },
    });
    $('#teamInviteDatatable').DataTable({
        "language": {
            "url": datatableLang,
        },
    });
    $('#structureInviteDatatable').DataTable({
        "language": {
            "url": datatableLang,
        },
    });
}
