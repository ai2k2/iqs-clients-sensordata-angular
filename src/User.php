
<?hh

final class User {

  public function __construct(
    private string $name,
    private int $id,
    private Vector<int> $friend_ids,
  ) {}

  public function getName(): string {