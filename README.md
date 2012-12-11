resolve-target-entity-test-bundle
=================================

Test bundle for resolving target entities in form types

### Note

Example for getting the target entity repository in a data transformer within this bundle:

```
$em->getClassMetadata('CiscoSystems\AuditBundle\Entity\Audit')->getAssociationMapping('auditReference')['targetEntity']
```