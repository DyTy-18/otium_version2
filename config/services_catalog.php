<?php

/*
|--------------------------------------------------------------------------
| Catálogo de servicios
|--------------------------------------------------------------------------
| Fuente única de los 9 servicios que se listan en el homepage, en el
| catálogo de /servicios y en el footer (Brief Web Otium 2026, sección 4).
| El orden de este arreglo es el orden en que se muestran.
|
| 'name' y 'desc' son claves de traducción en español: se pasan por __()
| al renderizar.
*/

return [
    ['route' => 'services.outsourcing',           'icon' => 'outsourcing-contable', 'name' => 'Outsourcing Contable Digital',        'desc' => 'Equipo contable externo con gestión tributaria incluida y documentación en SharePoint.'],
    ['route' => 'services.gestion-tributaria',    'icon' => 'gestion-tributaria',   'name' => 'Gestión Tributaria',                  'desc' => 'Cumplimiento fiscal con revisión previa, control de RCV y soporte técnico continuo.'],
    ['route' => 'services.quickbooks',            'icon' => 'quickbooks',           'name' => 'QuickBooks + Contabilidad',           'desc' => 'Llevamos o supervisamos tu contabilidad directamente en QuickBooks, conectada con el cumplimiento tributario en Bolivia.', 'new' => true],
    ['route' => 'services.outsourcing-laboral',   'icon' => 'outsourcing-laboral',  'name' => 'Administración Laboral',              'desc' => 'Planillas, trámites laborales y respaldo digital mensual para empresas en Bolivia.'],
    ['route' => 'services.audit',                 'icon' => 'auditoria',            'name' => 'Auditoría y Revisión Financiera',     'desc' => 'Dictamen formal ante el CAUB. Revisión técnica e independiente para decisiones con respaldo.'],
    ['route' => 'services.consultoria',           'icon' => 'consultoria',          'name' => 'Consultoría Empresarial',             'desc' => 'Diagnóstico financiero, modelos de decisión y acompañamiento gerencial.'],
    ['route' => 'services.sharepoint-documental', 'icon' => 'sharepoint',           'name' => 'Gestión Documental en SharePoint',    'desc' => 'Sistema documental con criterio empresarial dentro de Microsoft 365.'],
    ['route' => 'services.revaluo-activos',       'icon' => 'revaluo',              'name' => 'Revalúo y Gestión de Activos Fijos',  'desc' => 'Inventario físico, etiquetado QR, revalúo técnico y base patrimonial digital.'],
    ['route' => 'services.constitucion-empresas', 'icon' => 'constitucion',         'name' => 'Constitución de Empresas en Bolivia', 'desc' => 'SEPREC · NIT · Facturación electrónica · Documentación desde el primer día.'],
];
